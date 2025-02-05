<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    public function all()
    {
        return Student::all();
    }

    public function find($id)
    {
        return Student::find($id);
    }

    public function getStudentsWhereRegistrationAndPaymentAccepted()
    {
        return Student::whereHas('registration', function ($query) {
            $query->where('status', 'accepted');
        })->whereHas('payment', function ($query) {
            $query->where('status', 'accepted');
        })->get();
    }
}
