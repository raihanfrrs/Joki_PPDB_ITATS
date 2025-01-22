<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function student_index()
    {
        return view('pages.admin.master.student.index');
    }

    public function principle_index()
    {
        return view('pages.admin.master.principle.index');
    }
}
