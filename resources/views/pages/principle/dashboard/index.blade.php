@extends('layouts.principle')

@section('section-principle')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Kepala Sekolah /</span> Dashboard</h4>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-users ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalStudentPassed }}</h4>
                        </div>
                        <p class="mb-1">Total Siswa Terdaftar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
