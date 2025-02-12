<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminReportingController extends Controller
{
    public function student_passed_index()
    {
        return view('pages.admin.reporting.passed.index');
    }

    public function student_candidate_index()
    {
        return view('pages.admin.reporting.candidate.index');
    }
}
