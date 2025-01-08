<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => Uuid::uuid4()->toString(),
                'role' => 'admin'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'role' => 'student'
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'role' => 'principle'
            ]
        ];

        foreach ($roles as $key => $role) {
            Role::create($role);
        }
    }
}
