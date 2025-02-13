<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Repositories\RegistrationRepository;
use App\Http\Requests\StudentRegistrationStoreRequest;
use App\Http\Requests\StudentRegistrationUpdateRequest;
use App\Repositories\TimerRepository;

class RegistrationController extends Controller
{
    protected $registration, $timer;

    public function __construct(RegistrationRepository $registration, TimerRepository $timer)
    {
        $this->registration = $registration;
        $this->timer = $timer;
    }

    public function index()
    {
        return view('pages.student.registration.index', [
            'student' => auth()->user()->student,
            'timer' => $this->timer->getTimer()
        ]);
    }

    public function store(StudentRegistrationStoreRequest $request, Student $student)
    {
        if ($this->registration->store($request, $student)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Pendaftaran Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Pendaftaran Gagal!'
            ]);
        }
    }

    public function update(StudentRegistrationUpdateRequest $request, Student $student)
    {
        if ($this->registration->update($request, $student)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Pendaftaran Berhasil Diubah!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Pendaftaran Gagal Diubah!'
            ]);
        }
    }

    public function resubmit(StudentRegistrationUpdateRequest $request, Student $student)
    {
        if ($this->registration->update($request, $student, 'resubmit')) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Pendaftaran Berhasil Dikirim Ulang!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Pendaftaran Gagal Dikirim Ulang!'
            ]);
        }
    }
}
