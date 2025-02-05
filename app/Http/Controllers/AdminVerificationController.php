<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Repositories\RegistrationRepository;
use Illuminate\Http\Request;

class AdminVerificationController extends Controller
{
    protected $registration;

    public function __construct(RegistrationRepository $registration)
    {
        $this->registration = $registration;
    }

    public function registration_index()
    {
        return view('pages.admin.verification.registration.index');
    }

    public function registration_update(Request $request, Registration $registration)
    {
        if ($this->registration->updateStatus($request, $registration)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Ubah Status Pendaftaran Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Ubah Status Pendaftaran Gagal!'
            ]);
        }
    }

    public function registration_show(Registration $registration)
    {
        return view('pages.admin.verification.registration.show', [
            'registration' => $registration
        ]);
    }
}
