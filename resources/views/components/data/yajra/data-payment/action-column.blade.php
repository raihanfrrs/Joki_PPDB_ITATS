@if ($model->status == 'waiting')
    <div class="d-flex justify-content-center">
        <a href="{{ route('payment.edit', $model->getFirstMedia('payment_images')->id ?? '') }}" class="text-body">
            <i class="ti ti-pencil ti-sm mx-1"></i>
        </a>
    </div>
@endif
