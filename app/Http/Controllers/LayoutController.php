<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        if (Auth::check() && auth()->user()->role == 'student') {
            return view('pages.student.dashboard.index');
        } else if (Auth::check() && auth()->user()->role == 'admin') {
            return view('pages.admin.dashboard.index');
        } else if (Auth::check() && auth()->user()->role == 'principle') {
            return view('pages.principle.dashboard.index');
        } else {
            return redirect('/dashboard');
        }
    }
}
