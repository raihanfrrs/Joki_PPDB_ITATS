@php
    $latestPayment = optional($model->payment->first())->school_fee;
@endphp

@rupiah(optional($latestPayment)->total_fee ?? 0)
