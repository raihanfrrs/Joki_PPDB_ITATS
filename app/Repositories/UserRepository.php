<?php

namespace App\Repositories;

use App\Models\User;
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
}
