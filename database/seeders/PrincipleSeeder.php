<?php

namespace Database\Seeders;

use Ramsey\Uuid\Uuid;
use App\Models\Principle;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrincipleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $principles = [
            [
                'id' => Uuid::uuid4()->toString(),
                'user_id' => User::where('username', 'principleppdb')->first()->id,
                'name' => 'John Doe',
                'title' => 'ST., MT.',
                'nip' => '1234567890',
                'phone' => '1234567890',
                'email' => 'vMxgM@example.com',
                'pob' => 'Jakarta',
                'dob' => '1990-01-01',
                'gender' => 'male',
                'address' => 'Jl. Jakarta'
            ]
        ];

        foreach ($principles as $key => $principle) {
            Principle::create($principle);
        }
    }
}
