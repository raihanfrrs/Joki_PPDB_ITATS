<?php

namespace App\Repositories;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

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

    public function update($data)
    {
        return DB::transaction(function () use ($data) {
            Student::where('id', auth()->user()->student->id)->update([
                'kk_number' => $data['kk_number'],
                'hobby' => $data['hobby'],
                'goal' => $data['goal']
            ]);

            return true;
        });
    }
}
