<?php

namespace App\Http\Controllers;

use App\Repositories\PaymentRepository;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $payment;

    public function __construct(PaymentRepository $payment)
    {
        $this->payment = $payment;
    }

    public function index()
    {
        return view('pages.student.payment.index');
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
        return view('pages.student.payment.edit', compact('media'));
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
}
