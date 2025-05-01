<img src="{{ optional($model->payment->first())->getFirstMediaUrl('payment_images') ?? asset('images/no-image.png') }}"
    alt="" class="img-fluid">
