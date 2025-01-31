<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipleReportingController extends Controller
{
    public function student_index()
    {
        return view('pages.principle.reporting.student.index');
    }
}
