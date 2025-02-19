<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Admin;
use App\Models\Principle;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function updatePassword($data)
    {
        return DB::transaction(function () use ($data) {
            User::where('id', auth()->user()->id)->update([
                'password' => bcrypt($data['newPassword'])
            ]);

            return true;
        });
    }

    public function updateProfileByRole($data)
    {
        return DB::transaction(function () use ($data) {
            if (auth()->user()->role->role == 'admin') {
                Admin::where('id', auth()->user()->admin->id)->update([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone']
                ]);
            } elseif (auth()->user()->role->role == 'principle') {
                Principle::where('id', auth()->user()->principle->id)->update([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone']
                ]);
            }

            User::where('id', auth()->user()->id)->update([
                'password' => bcrypt($data['newPassword'])
            ]);

            return true;
        });
    }
}
