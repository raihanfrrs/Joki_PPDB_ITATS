@if ($model->registration)
    @if ($model->registration->status == 'waiting')
        <span class="badge bg-label-warning me-1">Menunggu</span>
    @elseif ($model->registration->status == 'approved')
        <span class="badge bg-label-success me-1">Diterima</span>
    @elseif ($model->registration->status == 'rejected')
        <span class="badge bg-label-danger me-1">Ditolak</span>
    @endif
@endif
