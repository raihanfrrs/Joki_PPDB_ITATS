@extends('layouts.student')

@section('title', 'PPDB - Payment')

@section('section-student')
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
                    <h5 class="card-header">Upload Bukti Pembayaran Baru</h5>
                    <div class="card-body">
                        <form action="{{ route('payment.update', $media) }}" method="POST" enctype="multipart/form-data"
                            class="dropzone" id="dropzone-basic-edit">
                            @csrf
                            <div class="dz-message needsclick">
                                Drop files here or click to upload
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" accept="image/*" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
