@extends('layouts.student')

@section('title', 'PPDB - Payment')

@section('section-student')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Upload Bukti Pembayaran</h5>
                    <div class="card-body">
                        <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data"
                            class="dropzone" id="dropzone-basic">
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
                                    <th class="text-center">Terakhir Perubahan</th>
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
        tbl_payment()
    </script>
@endpush
