<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TimerRepository;
use App\Repositories\PaymentRepository;

class PaymentController extends Controller
{
    protected $payment, $timer;

    public function __construct(PaymentRepository $payment, TimerRepository $timer)
    {
        $this->payment = $payment;
        $this->timer = $timer;
    }

    public function index()
    {
        return view('pages.student.payment.index', [
            'timer' => $this->timer->getTimer()
        ]);
    }

    public function store(Request $request)
    {
        // Proses unggah file
        if ($this->payment->store($request)) {
            return response()->json(['success' => true, 'redirect' => route('payment')]);
        } else {
            return response()->json(['success' => false, 'message' => 'Unggah Pembayaran Gagal!']);
        }
    }

    public function edit($media)
    {
        return view('pages.student.payment.edit', [
            'media' => $media,
            'timer' => $this->timer->getTimer()
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
