<div class="container-xxl pt-3">
    @php
        $timer = \App\Models\Timer::first();
    @endphp
    @if ($timer)
        @if ($timer->end_at < now())
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <span class="alert-icon text-danger me-2">
                    <i class="ti ti-clock ti-xs"></i>
                </span>
                Pendaftaran Telah Ditutup Dari {{ \Carbon\Carbon::parse($timer->end_at)->format('d F Y H:i:s') }}
            </div>
        @else
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <span class="alert-icon text-warning me-2">
                    <i class="ti ti-clock ti-xs"></i>
                </span>
                Batas Pendaftaran Hingga {{ \Carbon\Carbon::parse($timer->end_at)->format('d F Y H:i:s') }}
            </div>
        @endif

    @endif
</div>
