@if ($model->payment->sortByDesc('created_at')->first())
    @php $latestPayment = $model->payment->sortByDesc('created_at')->first(); @endphp
    @if ($latestPayment->status == 'waiting')
        <span class="badge bg-label-warning me-1">Menunggu</span>
    @elseif ($latestPayment->status == 'approved')
        <span class="badge bg-label-success me-1">Diterima</span>
    @elseif ($latestPayment->status == 'rejected')
        <span class="badge bg-label-danger me-1">Ditolak</span>
    @endif
@else
    <span class="badge bg-label-warning me-1">Belum Ada Pembayaran</span>
@endif
