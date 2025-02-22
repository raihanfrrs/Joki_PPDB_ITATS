<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminReportingController extends Controller
{
    public function student_passed_index()
    {
        return view('pages.admin.reporting.passed.index');
    }

    public function student_passed_show(Student $student)
    {
        return view('pages.admin.verification.registration.show', [
            'registration' => $student->registration
        ]);
    }

    public function student_candidate_index()
    {
        return view('pages.admin.reporting.candidate.index');
    }

    public function student_candidate_show(Student $student)
    {
        return view('pages.admin.verification.registration.show', [
            'registration' => $student->registration
        ]);
    }
}
