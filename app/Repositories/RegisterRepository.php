<?php

namespace App\Repositories;

use App\Mail\RegisterMail;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Repositories\RoleRepository;
use Illuminate\Support\Facades\Mail;

class RegisterRepository
{
    protected $role;


    public function __construct(RoleRepository $role)
    {
        $this->role = $role;
    }

    public function store($data)
    {
        $user_id = Uuid::uuid4()->toString();

        DB::transaction(function () use ($user_id, $data) {
            User::create([
                'id' => $user_id,
                'role_id' => $this->role->getRoleByRoleName('student')->id,
                'username' => $data['username'],
                'password' => bcrypt($data['password'])
            ]);

            Student::create([
                'id' => Uuid::uuid4()->toString(),
                'user_id' => $user_id,
                'name' => $data['name'],
                'nisn' => $data['nisn']
            ]);
        });

        return true;
    }
}
