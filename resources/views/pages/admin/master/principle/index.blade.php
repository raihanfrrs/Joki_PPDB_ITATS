@extends('layouts.admin')

@section('title', 'PPDB - Master Principle')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">Daftar Kepala Sekolah</h5>
            </div>
            <div class="card-datatable table-responsive">
                <table class="table border-top" id="listPrinciplesTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">No</th>
                            <th class="text-center">NIP</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Gelar</th>
                            <th class="text-center">Nomor Telepon</th>
                            <th class="text-center">Alamat Surel</th>
                            <th class="text-center">Tempat, Tanggal Lahir</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        tbl_principle()
    </script>
@endpush
