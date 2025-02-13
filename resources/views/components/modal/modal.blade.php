<div class="modal fade" id="showPayment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Bukti Pembayaran</h3>
                </div>
                <div id="data-show-payment-modal"></div>
            </div>
        </div>
    </div>
</div>

@php
    $timer = \App\Models\Timer::first();
@endphp

@if ($timer && $timer->end_at > now())
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <span class="alert-icon text-warning me-2">
                                <i class="ti ti-clock ti-xs"></i>
                            </span>
                            Batas Pendaftaran
                            {{ \Carbon\Carbon::parse($timer->end_at)->translatedFormat('d F Y H:i:s') }}
                        </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endif
