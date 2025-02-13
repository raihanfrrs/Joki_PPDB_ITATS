@extends('layouts.student')

@section('title', 'PPDB - Payment')

@push('styles')
    <style>
        .dropzone-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            cursor: not-allowed;
            z-index: 10;
        }

        .disabled-dropzone .dz-message {
            pointer-events: none;
            /* Mencegah klik pada dz-message */
        }
    </style>
@endpush

@section('section-student')
    @php
        $isRegistered = auth()->user()->student->registration ? true : false;
        $isRegisteredApproved = optional(auth()->user()->student->registration)->status == 'approved' ? true : false;
        $latestPayment = auth()->user()->student->payment()->where('status', '!=', 'rejected')->latest()->first();
        $isUploaded = $latestPayment ? false : true;
    @endphp

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                @if ($timer)
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="alert-icon text-warning me-2">
                            <i class="ti ti-clock ti-xs"></i>
                        </span>
                        Batas Pendaftaran {{ \Carbon\Carbon::parse($timer->end_at)->format('d F Y H:i:s') }}
                    </div>
                @endif
                <div class="card mb-4">
                    <h5 class="card-header">Upload Bukti Pembayaran</h5>
                    <div class="card-body">
                        <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data"
                            class="dropzone position-relative @if (!$isRegistered || !$isUploaded || !$isRegisteredApproved) disabled-dropzone @endif"
                            id="dropzone-basic">
                            @csrf
                            <div class="dz-message needsclick" id="dzMessage">
                                Drop files here or click to upload
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" accept="image/*" id="fileInput"
                                    @if (!$isRegistered || !$isUploaded || !$isRegisteredApproved) disabled @endif />
                            </div>

                            <!-- Tambahkan overlay -->
                            @if (!$isRegistered || !$isUploaded || !$isRegisteredApproved)
                                <div class="dropzone-overlay"></div>
                            @endif
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h5 class="card-title mb-3">Riwayat Pembayaran</h5>
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="table border-top" id="listPaymentsTable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Pembayaran</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Tanggal Pembayaran</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let isRegistered = @json($isRegistered);
            let isRegisteredApproved = @json($isRegisteredApproved);
            let isUploaded = @json($isUploaded);

            if (!isRegistered || !isUploaded || !isRegisteredApproved) {
                let dropzoneElement = document.querySelector("#dropzone-basic");
                let dzMessage = document.querySelector("#dzMessage");
                let fileInput = document.querySelector("#fileInput");

                // Cegah semua event pada Dropzone
                [dropzoneElement, dzMessage].forEach(el => {
                    el.addEventListener("click", function(event) {
                        event.preventDefault();
                        if (!isRegistered) {
                            alert(
                                "Anda harus mendaftar terlebih dahulu sebelum mengunggah bukti pembayaran."
                            );
                        } else if (!isUploaded) {
                            alert("Anda sudah mengunggah bukti pembayaran.");
                        } else if (!isRegisteredApproved) {
                            alert(
                                "Pendaftaran anda belum disetujui oleh Admin."
                            );
                        }

                    });

                    el.addEventListener("dragover", function(event) {
                        event.preventDefault();
                    });

                    el.addEventListener("drop", function(event) {
                        event.preventDefault();
                    });
                });

                // Pastikan input file juga dicegah
                fileInput.addEventListener("click", function(event) {
                    event.preventDefault();
                    if (!isRegistered) {
                        alert(
                            "Anda harus mendaftar terlebih dahulu sebelum mengunggah bukti pembayaran."
                        );
                    } else if (!isUploaded) {
                        alert("Anda sudah mengunggah bukti pembayaran.");
                    } else if (!isRegisteredApproved) {
                        alert(
                            "Pendaftaran anda belum disetujui oleh Admin."
                        );
                    }
                });
            }
        });

        tbl_payment();
    </script>
@endpush
