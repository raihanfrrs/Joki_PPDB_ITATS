<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PrincipleReportingController extends Controller
{
    public function student_index()
    {
        return view('pages.principle.reporting.student.index');
    }

    public function student_show(Student $student)
    {
        return view('pages.principle.reporting.student.show', [
            'registration' => $student->registration
        ]);
    }
}
