@php
    $payment = $model->payment->first();
@endphp

@if ($payment)
    <div class="d-flex justify-content-center">
        <a href="javascript:;" class="text-body" data-bs-target="#showPayment" data-bs-toggle="modal"
            id="button-trigger-modal-show-payment" data-id="{{ $payment->id }}"><i class="ti ti-eye ti-sm mx-1"></i></a>
    </div>
@endif
