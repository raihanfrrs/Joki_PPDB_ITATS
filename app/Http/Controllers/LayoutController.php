<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PaymentRepository;
use App\Repositories\StudentRepository;
use App\Repositories\RegistrationRepository;
use App\Repositories\TimerRepository;

class LayoutController extends Controller
{
    protected $role, $student, $registration, $payment, $timer;

    public function __construct(RoleRepository $role, StudentRepository $student, RegistrationRepository $registration, PaymentRepository $payment, TimerRepository $timer)
    {
        $this->role = $role;
        $this->student = $student;
        $this->registration = $registration;
        $this->payment = $payment;
        $this->timer = $timer;
    }

    public function index()
    {
        if (Auth::check() && $this->role->find(auth()->user()->role_id)->role == 'student') {
            return view('pages.student.dashboard.index', [
                'student' => $this->student->find(auth()->user()->student->id),
                'registration' => $this->registration->getRegistrationByStudentId(auth()->user()->student->id),
                'fatherFilled' => $this->registration->checkIfFatherFilled(auth()->user()->student->id),
                'motherFilled' => $this->registration->checkIfMotherFilled(auth()->user()->student->id),
                'custodianFilled' => $this->registration->checkIfCustodianFilled(auth()->user()->student->id),
                'payment' => $this->payment->getPaymentByStudentId(auth()->user()->student->id),
                'timer' => $this->timer->getTimer(),
            ]);
        } else if (Auth::check() && $this->role->find(auth()->user()->role_id)->role == 'admin') {
            return view('pages.admin.dashboard.index');
        } else if (Auth::check() && $this->role->find(auth()->user()->role_id)->role == 'principle') {
            return view('pages.principle.dashboard.index');
        } else {
            return view('pages.guest.dashboard.index');
        }
    }
}
