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
            $query->where('status', 'approved');
        })->whereHas('payment', function ($query) {
            $query->where('status', 'approved');
        })->get();
    }

    public function getStudentsWhereRegistrationAndPaymentWaiting()
    {
        return Student::whereHas('registration', function ($query) {
            $query->where('status', 'waiting');
        })
            ->orWhereHas('payment', function ($query) {
                $query->where('status', 'waiting');
            })
            ->get();
    }
}
