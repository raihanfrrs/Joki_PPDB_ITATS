<?php

namespace App\Repositories;

use Ramsey\Uuid\Uuid;
use App\Models\Payment;
use App\Mail\PaymentMail;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

            Mail::to($payment->student->email)->send(new PaymentMail($data, 'VERIFIKASI PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.feedback'));

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

            $attachments = [];

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

                $attachments[] = $media->getPath();
            }

            Mail::to(auth()->user()->student->email)->send(new PaymentMail(auth()->user()->student, 'PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.store', $attachments));
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new PaymentMail(auth()->user()->student, 'PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.store', $attachments));

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

                $attachments = [];

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

                $attachments[] = $newMedia->getPath();
            }

            Mail::to(auth()->user()->student->email)->send(new PaymentMail(auth()->user()->student, 'PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.update', $attachments));
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new PaymentMail(auth()->user()->student, 'PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.update', $attachments));

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

            Mail::to(auth()->user()->student->email)->send(new PaymentMail(auth()->user()->student, 'PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.destroy'));
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new PaymentMail(auth()->user()->student, 'PEMBAYARAN PPDB MI DARUSSALAM', 'components.mail.payment.destroy'));

            return true;
        });
    }
}
