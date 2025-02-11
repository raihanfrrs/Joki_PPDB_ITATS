<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Registration;
use App\Repositories\PaymentRepository;
use App\Repositories\RegistrationRepository;
use Illuminate\Http\Request;

class AdminVerificationController extends Controller
{
    protected $registration, $payment;

    public function __construct(RegistrationRepository $registration, PaymentRepository $payment)
    {
        $this->registration = $registration;
        $this->payment = $payment;
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

    public function payment_index()
    {
        return view('pages.admin.verification.payment.index');
    }

    public function payment_update(Request $request, Payment $payment)
    {
        if ($this->payment->updateStatus($request, $payment)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Ubah Status Pembayaran Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Ubah Status Pembayaran Gagal!'
            ]);
        }
    }

    public function payment_show()
    {
        return view('pages.admin.verification.payment.show');
    }
}
