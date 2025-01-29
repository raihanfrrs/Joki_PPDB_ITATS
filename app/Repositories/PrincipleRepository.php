<?php

namespace App\Repositories;

use Ramsey\Uuid\Uuid;
use App\Models\Principle;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PrincipleRepository
{
    public function all()
    {
        return Principle::all();
    }

    public function store($data)
    {
        return DB::transaction(function () use ($data) {
            $user_id = Uuid::uuid4()->toString();
            $principle_id = Uuid::uuid4()->toString();

            User::create([
                'id' => $user_id,
                'role_id' => Role::where('role', 'principle')->first()->id,
                'username' => $data['username'],
                'password' => bcrypt($data['password'])
            ]);

            $principle = Principle::create([
                'id' => $principle_id,
                'user_id' => $user_id,
                'name' => $data['name'],
                'title' => $data['title'],
                'nip' => $data['nip'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'pob' => $data['pob'],
                'dob' => $data['dob'],
                'gender' => $data['gender'],
                'email' => $data['email']
            ]);

            if ($data->hasFile('principle_images')) {
                foreach ($data->file('principle_images') as $key => $file) {
                    $media = $principle->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection('principle_images');

                    $media->update([
                        'model_id' => $principle_id,
                        'model_type' => Principle::class,
                    ]);
                }
            }

            return true;
        });
    }

    public function update($data, $id)
    {
        return DB::transaction(function () use ($data, $id) {
            $principle = Principle::findOrFail($id);
            $user = User::findOrFail($principle->user_id);

            // Update user data
            $user->update([
                'username' => $data['username'],
                'password' => bcrypt($data['password'])
            ]);

            // Update principle data
            $principle->update([
                'name' => $data['name'],
                'title' => $data['title'],
                'nip' => $data['nip'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'pob' => $data['pob'],
                'dob' => $data['dob'],
                'gender' => $data['gender'],
                'email' => $data['email']
            ]);

            // Jika ada file baru yang diunggah
            if ($data->hasFile('principle_images')) {
                // Hapus semua media lama sebelum menambahkan yang baru
                $principle->clearMediaCollection('principle_images');

                foreach ($data->file('principle_images') as $file) {
                    $principle->addMedia($file)
                        ->withResponsiveImages()
                        ->toMediaCollection('principle_images');
                }
            }

            return true;
        });
    }
}
