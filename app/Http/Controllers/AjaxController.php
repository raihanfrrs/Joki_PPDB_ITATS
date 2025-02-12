<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PaymentRepository;

class AjaxController extends Controller
{
    protected $payment;

    public function __construct(PaymentRepository $payment)
    {
        $this->payment = $payment;
    }

    public function payment_show($media)
    {
        return view('components.data.ajax.preview-payment', [
            'media' => $this->payment->getMediaById($media)
        ]);
    }
}
