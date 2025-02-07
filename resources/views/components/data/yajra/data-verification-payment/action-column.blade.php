<div class="d-flex justify-content-center">
    <a href="{{ route('verification.payment.show', $model->id) }}" class="text-body"><i
            class="ti ti-eye ti-sm mx-1"></i></a>
    <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
            class="ti ti-dots-vertical ti-sm mx-1"></i></a>
    <div class="dropdown-menu dropdown-menu-end m-0">
        @if ($model->status == 'waiting')
            <form action="{{ route('verification.payment.update', $model->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="approved">
                <button type="submit" class="dropdown-item">Terima</button>
            </form>

            <form action="{{ route('verification.payment.update', $model->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="rejected">
                <button class="dropdown-item">Tolak</button>
            </form>
        @elseif ($model->status == 'approved')
            <form action="{{ route('verification.payment.update', $model->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="rejected">
                <button class="dropdown-item">Tolak</button>
            </form>
        @elseif ($model->status == 'rejected')
            <form action="{{ route('verification.payment.update', $model->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="approved">
                <button type="submit" class="dropdown-item">Terima</button>
            </form>
        @endif

    </div>
</div>
