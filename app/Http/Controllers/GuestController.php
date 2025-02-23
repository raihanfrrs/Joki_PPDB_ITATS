<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function guide()
    {
        return view('pages.guest.dashboard.guide');
    }
}
