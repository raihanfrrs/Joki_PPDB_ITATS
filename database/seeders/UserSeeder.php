<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id' => Uuid::uuid4()->toString(),
                'role_id' => Role::where('role', 'admin')->first()->id,
                'username' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'role_id' => Role::where('role', 'student')->first()->id,
                'username' => 'student',
                'password' => bcrypt('student123'),
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'role_id' => Role::where('role', 'principle')->first()->id,
                'username' => 'principle',
                'password' => bcrypt('principle123'),
            ]
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
