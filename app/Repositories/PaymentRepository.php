<?php

namespace App\Repositories;

use App\Models\Payment;
use Ramsey\Uuid\Uuid;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PaymentRepository
{
    public function all()
    {
        return Payment::where('student_id', auth()->user()->student->id)->get();
    }

    public function getPaymentByStudentId($studentId)
    {
        return Payment::where('student_id', $studentId)->get();
    }

    public function getAllPayment()
    {
        return Payment::all();
    }

    public function getMediaById($mediaId)
    {
        return Media::where('model_id', $mediaId)->first();
    }

    public function updateStatus($data, $payment)
    {
        return DB::transaction(function () use ($data, $payment) {
            Payment::where('id', $payment->id)->update([
                'status' => $data['status'],
            ]);
            return true;
        });
    }

    public function store($data)
    {
        $payment_id = Uuid::uuid4()->toString();
        return DB::transaction(function () use ($data, $payment_id) {
            $payment = Payment::create([
                'id' => $payment_id,
                'student_id' => auth()->user()->student->id
            ]);

            if ($data->hasFile('file')) {
                $file = $data->file('file'); // Ambil file langsung
                $media = $payment->addMedia($file)
                    ->withResponsiveImages()
                    ->toMediaCollection('payment_images');

                // Update data media dengan model_id dan model_type
                $media->update([
                    'model_id' => $payment_id,
                    'model_type' => Payment::class,
                ]);
            }

            return true;
        });
    }

    public function update($data, $mediaId)
    {
        return DB::transaction(function () use ($data, $mediaId) {
            if ($data->hasFile('file')) {
                // Cari media berdasarkan ID
                $media = Media::find($mediaId);

                // Pastikan media ditemukan
                if (!$media) {
                    throw new \Exception("Media tidak ditemukan");
                }

                // Ambil model yang memiliki media ini
                $model = $media->model;

                // Pastikan model valid dan mendukung `clearMediaCollection`
                if (!$model || !method_exists($model, 'clearMediaCollection')) {
                    throw new \Exception("Model tidak valid atau tidak mendukung media");
                }

                // Hapus media lama dari koleksi 'payment_images'
                $model->clearMediaCollection('payment_images');

                // Tambahkan gambar baru ke koleksi media
                $newMedia = $model
                    ->addMediaFromRequest('file')
                    ->toMediaCollection('payment_images');

                // Update informasi media baru
                if ($newMedia) {
                    $newMedia->update([
                        'model_id' => $model->id,
                        'model_type' => get_class($model),
                    ]);
                }
            }

            return true;
        });
    }

    public function destroy($mediaId)
    {
        return DB::transaction(function () use ($mediaId) {
            // Cari media berdasarkan ID
            $media = Media::findOrFail($mediaId);

            // Ambil model Payment yang terkait dengan media ini (jika ada)
            $payment = Payment::where('id', $media->model_id)->first();

            // Hapus media dari koleksi
            $media->delete();

            // Hapus payment jika ditemukan
            if ($payment) {
                $payment->delete();
            }

            return true;
        });
    }
}
