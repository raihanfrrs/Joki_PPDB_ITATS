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

    public function update($data, $media)
    {
        return DB::transaction(function () use ($data, $media) {
            if ($data->hasFile('file')) {
                $mediaStudent = Media::where('id', $media)->first();

                // Hapus media sebelumnya di koleksi 'akta_kelahiran_images'
                $mediaStudent->clearMediaCollection('payment_images');

                // Tambahkan gambar baru ke koleksi media
                $media = $mediaStudent
                    ->addMediaFromRequest('file')
                    ->toMediaCollection('payment_images');

                // Pastikan objek media tidak null sebelum mengupdate informasi
                if ($media) {
                    $media->update([
                        'model_id' => $mediaStudent->model_id,
                        'model_type' => Registration::class,
                    ]);
                }
            }
        });
    }
}
