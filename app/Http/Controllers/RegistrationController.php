<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Repositories\TimerRepository;
use Illuminate\Http\RedirectResponse;
use App\Repositories\RegistrationRepository;
use App\Http\Requests\StudentRegistrationStoreRequest;
use App\Http\Requests\StudentRegistrationUpdateRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class RegistrationController extends BaseController
{
    protected $registration;

    public function __construct(TimerRepository $timer, RegistrationRepository $registration)
    {
        parent::__construct($timer);
        $this->registration = $registration;
    }

    public function index()
    {
        return view('pages.student.registration.index', [
            'student' => auth()->user()->student
        ]);
    }

    public function store(StudentRegistrationStoreRequest $request, Student $student): RedirectResponse
    {
        if ($redirect = $this->checkRegistrationDeadline()) {
            return $redirect;
        }

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

    public function resubmit(StudentRegistrationUpdateRequest $request, Student $student): RedirectResponse
    {
        if ($redirect = $this->checkRegistrationDeadline()) {
            return $redirect;
        }

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

    public function pdf()
    {
        $student = auth()->user()->student;

        $imagePath = public_path('assets/img/branding/tut-wuri-handayani.png');

        if (file_exists($imagePath)) {
            $imageData = base64_encode(file_get_contents($imagePath));
            $imageMime = mime_content_type($imagePath);
            $imageBase64 = 'data:' . $imageMime . ';base64,' . $imageData;
        } else {
            $imageBase64 = null; // atau berikan placeholder jika tidak ditemukan
        }

        $pdf = Pdf::loadView('pages.student.registration.pdf', [
            'student' => $student,
            'imageBase64' => $imageBase64,
        ]);

        return $pdf->stream();
    }
}
