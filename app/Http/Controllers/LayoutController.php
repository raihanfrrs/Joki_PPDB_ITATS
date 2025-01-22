<?php

namespace App\Http\Controllers;

use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    protected $role;

    public function __construct(RoleRepository $role)
    {
        $this->role = $role;
    }

    public function index()
    {
        if (Auth::check() && $this->role->find(auth()->user()->role_id)->role == 'student') {
            return view('pages.student.dashboard.index');
        } else if (Auth::check() && $this->role->find(auth()->user()->role_id)->role == 'admin') {
            return view('pages.admin.dashboard.index');
        } else if (Auth::check() && $this->role->find(auth()->user()->role_id)->role == 'principle') {
            return view('pages.principle.dashboard.index');
        } else {
            return view('pages.guest.dashboard.index');
        }
    }
}
