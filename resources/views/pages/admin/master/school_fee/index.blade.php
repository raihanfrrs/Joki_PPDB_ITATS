@extends('layouts.admin')

@section('title', 'PPDB - Master Biaya Sekolah')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">Daftar Biaya Sekolah</h5>
            </div>
            <div class="card-datatable table-responsive">
                <table class="table border-top" id="listSchoolFeesTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">No</th>
                            <th class="text-center">Formulir</th>
                            <th class="text-center">Dana Pengembangan</th>
                            <th class="text-center">Sumbangan Pembinaan Pendidika</th>
                            <th class="text-center">Seragam Batik</th>
                            <th class="text-center">Seragam Pramuka</th>
                            <th class="text-center">Total Biaya</th>
                            <th class="text-center">Tahun Ajaran</th>
                            <th class="text-center">Dibuat Pada</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        tbl_school_fee()
    </script>
@endpush
