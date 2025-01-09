<?php

namespace App\Repositories;

use App\Models\User;

class LoginRepository
{
    public function getUsernameAndRole($username)
    {
        return User::join('roles', 'users.role_id', '=', 'roles.id')->where('username', $username)->first();
    }
}
