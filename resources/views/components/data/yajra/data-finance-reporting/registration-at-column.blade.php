@php
    $registration = $model->registration;
@endphp

@if ($registration)
    @if ($registration->status == 'approved')
        <span class="badge bg-label-success me-1">Disetujui</span>
        {{ \Carbon\Carbon::parse($registration->created_at)->format('d/m/Y H:i:s') }}
    @elseif ($registration->status == 'waiting')
        <span class="badge bg-label-warning me-1">Menunggu</span>
        {{ \Carbon\Carbon::parse($registration->created_at)->format('d/m/Y H:i:s') }}
    @elseif ($registration->status == 'rejected')
        <span class="badge bg-label-danger me-1">Ditolak</span>
        {{ \Carbon\Carbon::parse($registration->created_at)->format('d/m/Y H:i:s') }}
    @endif
@else
    <span class="text-danger">Belum Ada Pendaftaran</span>
@endif
