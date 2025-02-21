<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TimerRepository;
use App\Repositories\PaymentRepository;

class PaymentController extends BaseController
{
    protected $payment;

    public function __construct(TimerRepository $timer, PaymentRepository $payment)
    {
        parent::__construct($timer);
        $this->payment = $payment;
    }

    public function index()
    {
        return view('pages.student.payment.index');
    }

    public function store(Request $request)
    {
        if ($redirect = $this->checkRegistrationDeadline()) {
            return $redirect;
        }

        if ($this->payment->store($request)) {
            return response()->json(['success' => true, 'redirect' => route('payment')]);
        } else {
            return response()->json(['success' => false, 'message' => 'Unggah Pembayaran Gagal!']);
        }
    }

    public function edit($media)
    {
        return view('pages.student.payment.edit', [
            'media' => $media
        ]);
    }

    public function update(Request $request, $media)
    {
        // Proses unggah file
        if ($this->payment->update($request, $media)) {
            return response()->json(['success' => true, 'redirect' => route('payment')]);
        } else {
            return response()->json(['success' => false, 'message' => 'Unggah Pembayaran Gagal!']);
        }
    }

    public function destroy($media)
    {
        if ($this->payment->destroy($media)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Hapus Bukti Pembayaran Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Hapus Bukti Pembayaran Gagal!'
            ]);
        }
    }
}
