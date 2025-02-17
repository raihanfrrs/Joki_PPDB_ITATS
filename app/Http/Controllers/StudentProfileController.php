<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function profile_index()
    {
        return view('pages.student.profile.profiles.index');
    }

    public function setting_index()
    {
        return view('pages.student.profile.settings.index');
    }
}
