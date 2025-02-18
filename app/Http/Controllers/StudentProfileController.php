<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentProfileUpdateRequest;
use App\Http\Requests\StudentSettingUpdateRequest;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    protected $student, $user;

    public function __construct(StudentRepository $student, UserRepository $user)
    {
        $this->student = $student;
        $this->user = $user;
    }

    public function profile_index()
    {
        return view('pages.student.profile.profiles.index');
    }

    public function profile_update(StudentProfileUpdateRequest $request)
    {
        if ($this->student->update($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Ubah Profil Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Ubah Profil Gagal!'
            ]);
        }
    }

    public function setting_index()
    {
        return view('pages.student.profile.settings.index');
    }

    public function setting_update(StudentSettingUpdateRequest $request)
    {
        if ($this->user->updatePassword($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Ubah Password Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Ubah Password Gagal!'
            ]);
        }
    }
}
