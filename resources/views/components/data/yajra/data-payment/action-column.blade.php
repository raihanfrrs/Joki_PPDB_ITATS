@if ($model->status == 'waiting')
    <div class="d-flex justify-content-center">
        <a href="{{ route('payment.edit', $model->getFirstMedia('payment_images')->id ?? '') }}" class="text-body">
            <i class="ti ti-pencil ti-sm mx-1"></i>
        </a>
        <form action="{{ route('payment.destroy', $model->getFirstMedia('payment_images')->id ?? '') }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="javascript:;" class="text-danger"
                onclick="if(confirm('Apakah Anda yakin ingin menghapus?')) this.closest('form').submit()">
                <i class="ti ti-trash ti-sm mx-1"></i>
            </a>
        </form>
    </div>
@endif
