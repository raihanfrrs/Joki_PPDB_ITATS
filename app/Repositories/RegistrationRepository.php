<?php

namespace App\Repositories;

use App\Models\Custodian;
use App\Models\Father;
use App\Models\Mother;
use App\Models\Registration;
use App\Models\Student;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class RegistrationRepository
{
    public function getAllRegistration()
    {
        return Registration::all();
    }

    public function getRegistrationByStudentId($student_id)
    {
        return Registration::where('student_id', $student_id)->first();
    }

    public function checkIfFatherFilled($student_id)
    {
        // Ambil data Father berdasarkan Student ID
        $father = Student::where('id', $student_id)->first()?->father;

        // Jika tidak ada data Father, anggap belum terisi
        if (!$father) {
            return false;
        }

        // Cek apakah ada kolom yang NULL atau kosong
        $isEmpty = Father::where('id', $father->id)
            ->where(function ($query) {
                $query->whereNull('nik')->orWhere('nik', '')
                    ->orWhereNull('kk_number')->orWhere('kk_number', '')
                    ->orWhereNull('name')->orWhere('name', '')
                    ->orWhereNull('pob')->orWhere('pob', '')
                    ->orWhereNull('dob')->orWhere('dob', '')
                    ->orWhereNull('education')->orWhere('education', '')
                    ->orWhereNull('job')->orWhere('job', '')
                    ->orWhereNull('phone')->orWhere('phone', '')
                    ->orWhereNull('email')->orWhere('email', '')
                    ->orWhereNull('address')->orWhere('address', '')
                    ->orWhereNull('subdistrict')->orWhere('subdistrict', '')
                    ->orWhereNull('regency')->orWhere('regency', '')
                    ->orWhereNull('province')->orWhere('province', '')
                    ->orWhereNull('city')->orWhere('city', '')
                    ->orWhereNull('religion')->orWhere('religion', '');
            })
            ->exists();

        // Jika ada data kosong, return false (belum terisi sepenuhnya)
        return !$isEmpty;
    }


    public function store($data, $student)
    {
        $father_id = Uuid::uuid4()->toString();
        $mother_id = Uuid::uuid4()->toString();
        $custodian_id = Uuid::uuid4()->toString();
        $registration_id = Uuid::uuid4()->toString();
        return DB::transaction(function () use ($data, $father_id, $mother_id, $custodian_id, $student, $registration_id) {
            Father::create([
                'id' => $father_id,
                'nik' => $data['father_nik'],
                'kk_number' => $data['father_kk_number'],
                'name' => $data['father_name'],
                'pob' => $data['father_pob'],
                'dob' => $data['father_dob'],
                'education' => $data['father_education'],
                'job' => $data['father_job'],
                'religion' => $data['father_religion'],
                'phone' => $data['father_phone'],
                'email' => $data['father_email'],
                'address' => $data['father_address'],
                'province' => $data['father_province'],
                'city' => $data['father_city'],
                'subdistrict' => $data['father_subdistrict'],
                'regency' => $data['father_regency'],
            ]);

            Mother::create([
                'id' => $mother_id,
                'nik' => $data['mother_nik'],
                'kk_number' => $data['mother_kk_number'],
                'name' => $data['mother_name'],
                'pob' => $data['mother_pob'],
                'dob' => $data['mother_dob'],
                'education' => $data['mother_education'],
                'job' => $data['mother_job'],
                'religion' => $data['mother_religion'],
                'phone' => $data['mother_phone'],
                'email' => $data['mother_email'],
                'address' => $data['mother_address'],
                'province' => $data['mother_province'],
                'city' => $data['mother_city'],
                'subdistrict' => $data['mother_subdistrict'],
                'regency' => $data['mother_regency'],
            ]);

            Custodian::create([
                'id' => $custodian_id,
                'nik' => $data['custodian_nik'],
                'kk_number' => $data['custodian_kk_number'],
                'name' => $data['custodian_name'],
                'pob' => $data['custodian_pob'],
                'dob' => $data['custodian_dob'],
                'education' => $data['custodian_education'],
                'job' => $data['custodian_job'],
                'religion' => $data['custodian_religion'],
                'phone' => $data['custodian_phone'],
                'email' => $data['custodian_email'],
                'address' => $data['custodian_address'],
                'province' => $data['custodian_province'],
                'city' => $data['custodian_city'],
                'subdistrict' => $data['custodian_subdistrict'],
                'regency' => $data['custodian_regency'],
            ]);

            $student->update([
                'nisn' => $data['nisn'],
                'nik' => $data['nik'],
                'name' => $data['name'],
                'gender' => $data['gender'],
                'school_year' => $data['school_year'],
                'pob' => $data['pob'],
                'dob' => $data['dob'],
                'address' => $data['address'],
                'province' => $data['province'],
                'city' => $data['city'],
                'subdistrict' => $data['subdistrict'],
                'regency' => $data['regency'],
                'religion' => $data['religion'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'father_id' => $father_id,
                'mother_id' => $mother_id,
                'custodian_id' => $custodian_id
            ]);

            $registration = Registration::create([
                'id' => Uuid::uuid4()->toString(),
                'student_id' => $student->id,
            ]);

            if ($data->hasFile('image_akte_kelahiran')) {

                foreach ($data->file('image_akte_kelahiran') as $key => $file) {
                    $media = $registration->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection('akta_kelahiran_images');

                    $media->update([
                        'model_id' => $registration_id,
                        'model_type' => Registration::class,
                    ]);
                }
            }

            if ($data->hasFile('ktp_foto')) {
                foreach ($data->file('ktp_foto') as $key => $file) {
                    $media = $registration->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection('ktp_images');

                    $media->update([
                        'model_id' => $registration_id,
                        'model_type' => Registration::class,
                    ]);
                }
            }

            if ($data->hasFile('image_pas_foto')) {
                foreach ($data->file('image_pas_foto') as $key => $file) {
                    $media = $registration->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection('pasfoto_images');

                    $media->update([
                        'model_id' => $registration_id,
                        'model_type' => Registration::class,
                    ]);
                }
            }

            if ($data->hasFile('image_ijasah')) {
                foreach ($data->file('image_ijasah') as $key => $file) {
                    $media = $registration->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection('ijasah_tk_images');

                    $media->update([
                        'model_id' => $registration_id,
                        'model_type' => Registration::class,
                    ]);
                }
            }

            return true;
        });
    }

    public function update($data, $student, $status = null)
    {
        return DB::transaction(function () use ($data, $student, $status) {

            $student->father->update([
                'nik' => $data['father_nik'],
                'kk_number' => $data['father_kk_number'],
                'name' => $data['father_name'],
                'pob' => $data['father_pob'],
                'dob' => $data['father_dob'],
                'education' => $data['father_education'],
                'job' => $data['father_job'],
                'religion' => $data['father_religion'],
                'phone' => $data['father_phone'],
                'email' => $data['father_email'],
                'address' => $data['father_address'],
                'province' => $data['father_province'],
                'city' => $data['father_city'],
                'subdistrict' => $data['father_subdistrict'],
                'regency' => $data['father_regency'],
            ]);

            $student->mother->update([
                'nik' => $data['mother_nik'],
                'kk_number' => $data['mother_kk_number'],
                'name' => $data['mother_name'],
                'pob' => $data['mother_pob'],
                'dob' => $data['mother_dob'],
                'education' => $data['mother_education'],
                'job' => $data['mother_job'],
                'religion' => $data['mother_religion'],
                'phone' => $data['mother_phone'],
                'email' => $data['mother_email'],
                'address' => $data['mother_address'],
                'province' => $data['mother_province'],
                'city' => $data['mother_city'],
                'subdistrict' => $data['mother_subdistrict'],
                'regency' => $data['mother_regency'],
            ]);

            $student->custodian->update([
                'nik' => $data['custodian_nik'],
                'kk_number' => $data['custodian_kk_number'],
                'name' => $data['custodian_name'],
                'pob' => $data['custodian_pob'],
                'dob' => $data['custodian_dob'],
                'education' => $data['custodian_education'],
                'job' => $data['custodian_job'],
                'religion' => $data['custodian_religion'],
                'phone' => $data['custodian_phone'],
                'email' => $data['custodian_email'],
                'address' => $data['custodian_address'],
                'province' => $data['custodian_province'],
                'city' => $data['custodian_city'],
                'subdistrict' => $data['custodian_subdistrict'],
                'regency' => $data['custodian_regency'],
            ]);

            $student->update([
                'nisn' => $data['nisn'],
                'nik' => $data['nik'],
                'name' => $data['name'],
                'gender' => $data['gender'],
                'school_year' => $data['school_year'],
                'pob' => $data['pob'],
                'dob' => $data['dob'],
                'address' => $data['address'],
                'province' => $data['province'],
                'city' => $data['city'],
                'subdistrict' => $data['subdistrict'],
                'regency' => $data['regency'],
                'religion' => $data['religion'],
                'phone' => $data['phone'],
                'email' => $data['email']
            ]);

            if ($status == 'resubmit') {
                Registration::where('student_id', $student->id)->update(['status' => 'waiting', 'flag' => 'resubmit']);
            }

            // Handle image upload
            if ($data->hasFile('image_akte_kelahiran')) {
                // Clear existing media collection
                $student->registration->clearMediaCollection('akta_kelahiran_images');

                // Add new image to media collection
                $media = $student->registration
                    ->addMediaFromRequest('image_akte_kelahiran')
                    ->withResponsiveImages()
                    ->toMediaCollection('akta_kelahiran_images');

                // Update media model information
                $media->update([
                    'model_id' => $student->registration->id,
                    'model_type' => Registration::class,
                ]);
            }

            // Handle image upload
            if ($data->hasFile('ktp_foto')) {
                // Clear existing media collection
                $student->registration->clearMediaCollection('ktp_foto_images');

                // Add new image to media collection
                $media = $student->registration
                    ->addMediaFromRequest('ktp_foto')
                    ->withResponsiveImages()
                    ->toMediaCollection('ktp_foto_images');

                // Update media model information
                $media->update([
                    'model_id' => $student->registration->id,
                    'model_type' => Registration::class,
                ]);
            }

            // Handle image upload
            if ($data->hasFile('image_pas_foto')) {
                // Clear existing media collection
                $student->registration->clearMediaCollection('pas_foto_images');

                // Add new image to media collection
                $media = $student->registration
                    ->addMediaFromRequest('image_pas_foto')
                    ->withResponsiveImages()
                    ->toMediaCollection('pas_foto_images');

                // Update media model information
                $media->update([
                    'model_id' => $student->registration->id,
                    'model_type' => Registration::class,
                ]);
            }

            // Handle image upload
            if ($data->hasFile('image_ijasah')) {
                // Clear existing media collection
                $student->registration->clearMediaCollection('ijasah_tk_images');

                // Add new image to media collection
                $media = $student->registration
                    ->addMediaFromRequest('image_ijasah')
                    ->withResponsiveImages()
                    ->toMediaCollection('ijasah_tk_images');

                // Update media model information
                $media->update([
                    'model_id' => $student->registration->id,
                    'model_type' => Registration::class,
                ]);
            }

            return true;
        });
    }

    public function updateStatus($data, $registration)
    {
        return DB::transaction(function () use ($data, $registration) {
            $registration->update([
                'status' => $data['status'],
            ]);

            return true;
        });
    }
}
