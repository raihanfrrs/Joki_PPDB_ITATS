@php
    $latestPayment = $model->payment->first();
@endphp

@if ($latestPayment)
    @if ($latestPayment->status == 'approved')
        <span class="badge bg-label-success me-1">Diterima</span>
        {{ \Carbon\Carbon::parse($latestPayment->created_at)->format('d/m/Y H:i:s') }}
    @elseif ($latestPayment->status == 'waiting')
        <span class="badge bg-label-warning me-1">Menunggu</span>
        {{ \Carbon\Carbon::parse($latestPayment->created_at)->format('d/m/Y H:i:s') }}
    @elseif ($latestPayment->status == 'rejected')
        <span class="badge bg-label-danger me-1">Ditolak</span>
        {{ \Carbon\Carbon::parse($latestPayment->created_at)->format('d/m/Y H:i:s') }}
    @endif
@else
    <span class="text-danger">Belum Ada Pembayaran</span>
@endif
