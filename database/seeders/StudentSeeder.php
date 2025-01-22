<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'id' => Uuid::uuid4()->toString(),
                'user_id' => User::where('username', 'studentppdb')->first()->id,
                'name' => 'John Doe',
                'nisn' => '1234567890'
            ]
        ];

        foreach ($students as $key => $student) {
            Student::create($student);
        }
    }
}
