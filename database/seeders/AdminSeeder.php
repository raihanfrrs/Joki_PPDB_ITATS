<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'id' => Uuid::uuid4()->toString(),
                'user_id' => User::where('username', 'adminppdb')->first()->id,
                'name' => 'MI Darussalam',
                'phone' => '1234567890',
                'email' => 'midarussalamppdb@gmail.com'
            ]
        ];

        foreach ($admins as $key => $admin) {
            Admin::create($admin);
        }
    }
}
