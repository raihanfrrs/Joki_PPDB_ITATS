@extends('layouts.admin')

@section('title', 'PPDB - Laporan Siswa Lolos')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">Laporan Siswa Lolos</h5>
            </div>
            <div class="card-datatable table-responsive">
                <table class="table border-top" id="listReportingStudentPassedTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">No</th>
                            <th class="text-center">NISN</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Nomor Telepon</th>
                            <th class="text-center">Alamat Surel</th>
                            <th class="text-center">Tempat, Tanggal Lahir</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Terdaftar Pada</th>
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
        tbl_reporting_student_passed()
    </script>
@endpush
