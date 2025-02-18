@extends('layouts.student')

@section('title', 'PPDB - Profil')

@section('section-student')
    <div class="container-xxl flex-grow-1 pt-0">

        <div class="row">
            <div class="col-md-12 mb-3">
                @include('components.nav-pills.profile-settings')
                <form method="POST" action="{{ route('student.profile.update') }}">
                    @csrf
                    @method('PATCH')
                    <div class="card mb-2">
                        <h5 class="card-header">Rincian Profil</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @if (auth()->user()->student->registration && auth()->user()->student->registration->getFirstMediaUrl('pasfoto_images'))
                                    <img src="{{ auth()->user()->student->registration->getFirstMediaUrl('pasfoto_images') }}"
                                        alt="{{ auth()->user()->student->name }}" class="d-block w-px-100 h-px-100 rounded"
                                        id="uploadedAvatar" />
                                @else
                                    <img src="{{ asset('assets/img/avatars/14.png') }}" alt="user-avatar"
                                        class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                                @endif

                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                                    <input class="form-control" type="text" id="nisn" name="nisn"
                                        value="{{ auth()->user()->student->nisn }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                                    <input class="form-control" type="text" name="nik" id="nik"
                                        value="{{ auth()->user()->student->nik }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="kk_number" class="form-label">Nomor Kartu Keluarga</label>
                                    <input class="form-control" type="text" name="kk_number" id="kk_number"
                                        value="{{ auth()->user()->student->kk_number }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        value="{{ auth()->user()->student->name }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="email" class="form-label">Alamat Surel</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ auth()->user()->student->email }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input class="form-control" type="text" name="phone" id="phone"
                                        value="{{ auth()->user()->student->phone }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control" disabled>{{ auth()->user()->student->address }}</textarea>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="subdistrict" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="subdistrict" name="subdistrict"
                                        value="{{ auth()->user()->student->subdistrict }}" disabled />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="regency" class="form-label">Kelurahan</label>
                                    <input type="text" class="form-control" id="regency" name="regency"
                                        value="{{ auth()->user()->student->regency }}" disabled />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="province" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="province" name="province"
                                        value="{{ auth()->user()->student->province }}" disabled />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="city" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        value="{{ auth()->user()->student->city }}" disabled />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="pob" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="pob" name="pob"
                                        value="{{ auth()->user()->student->pob }}" disabled />
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="dob" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        value="{{ auth()->user()->student->dob }}" disabled />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="religion" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="religion" name="religion"
                                        value="{{ auth()->user()->student->religion }}" disabled />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="school_year" class="form-label">Tahun Kelulusan</label>
                                    <input type="text" class="form-control" id="school_year" name="school_year"
                                        value="{{ auth()->user()->student->school_year }}" disabled />
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="gender" class="form-label d-block">Jenis Kelamin</label>
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio"
                                            {{ auth()->user()->student->gender == 'male' ? 'checked' : '' }}
                                            name="gender" disabled />
                                        <label class="form-check-label">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            {{ auth()->user()->student->gender == 'female' ? 'checked' : '' }}
                                            name="gender" disabled />
                                        <label class="form-check-label">Perempuan</label>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="hobby" class="form-label">Hobi</label>
                                    <input type="text" class="form-control" id="hobby" name="hobby"
                                        value="{{ auth()->user()->student->hobby }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="goal" class="form-label">Cita-Cita</label>
                                    <input type="text" class="form-control" id="goal" name="goal"
                                        value="{{ auth()->user()->student->goal }}" />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <button type="reset" class="btn btn-label-secondary">Batal</button>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
