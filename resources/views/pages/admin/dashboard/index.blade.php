@extends('layouts.admin')

@section('title', 'PPDB - Dashboard')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Dashboard</h4>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-users ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalStudents }}</h4>
                        </div>
                        <p class="mb-1">Total Siswa Pendaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info"><i class="ti ti-user ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalPrinciples }}</h4>
                        </div>
                        <p class="mb-1">Total Kepala Sekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="ti ti-check ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalStudentPassed }}</h4>
                        </div>
                        <p class="mb-1">Total Siswa Lolos</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning"><i
                                        class="ti ti-clipboard ti-md"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $totalStudentCandidate }}</h4>
                        </div>
                        <p class="mb-1">Total Calon Siswa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
