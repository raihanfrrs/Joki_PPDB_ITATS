@extends('layouts.student')

@section('title', 'PPDB - Registration')

@section('section-student')
    <div class="container-xxl flex-grow-1 pt-0">
        <form method="POST" enctype="multipart/form-data" id="form-registration">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Data Pribadi</h5>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nisn" class="form-label">NISN</label>
                                        <input type="text" class="form-control @error('nisn') is-invalid @enderror"
                                            id="nisn" name="nisn" required
                                            value="{{ old('nisn', $student->nisn) }}" />
                                        @error('nisn')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                            id="nik" name="nik" required
                                            value="{{ old('nik', $student->nik) }}" />
                                        @error('nik')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" required value="{{ old('name', $student->name) }}" />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label d-block">Jenis Kelamin</label>
                                        <div class="form-check form-check-inline mt-3 me-3">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male"
                                                {{ old('gender', $student->gender) == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="male">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female"
                                                {{ old('gender', $student->gender) == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="female">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="school_year" class="form-label">Tahun Kelulusan</label>
                                        <input type="text"
                                            class="form-control @error('school_year') is-invalid @enderror" id="school_year"
                                            name="school_year" placeholder="{{ date('Y') }}" required
                                            value="{{ old('school_year', $student->school_year) }}" />
                                        @error('school_year')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="pob" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('pob') is-invalid @enderror"
                                            id="pob" name="pob" required
                                            value="{{ old('pob', $student->pob) }}" />
                                        @error('pob')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label">Tempat Lahir</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            id="dob" name="dob" required
                                            value="{{ old('dob', $student->dob) }}" />
                                        @error('dob')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat Lengkap</label>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" cols="30"
                                    rows="3" required>{{ old('address', $student->address) }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="province" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control @error('province') is-invalid @enderror"
                                            id="province" name="province" required
                                            value="{{ old('province', $student->province) }}" />
                                        @error('province')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">Kota / Kabupaten</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            id="city" name="city" required
                                            value="{{ old('city', $student->city) }}" />
                                        @error('city')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="subdistrict" class="form-label">Kecamatan</label>
                                        <input type="text"
                                            class="form-control @error('subdistrict') is-invalid @enderror"
                                            id="subdistrict" name="subdistrict" required
                                            value="{{ old('subdistrict', $student->subdistrict) }}" />
                                        @error('subdistrict')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="regency" class="form-label">Kelurahan</label>
                                        <input type="text" class="form-control @error('regency') is-invalid @enderror"
                                            id="regency" name="regency" required
                                            value="{{ old('regency', $student->regency) }}" />
                                        @error('regency')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="religion" class="form-label">Agama</label>
                                        <input type="text"
                                            class="form-control @error('religion') is-invalid @enderror" id="religion"
                                            name="religion" required value="{{ old('religion', $student->religion) }}" />
                                        @error('religion')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="phone" class="form-label">No. Telepon</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" required
                                            value="{{ old('phone', $student->phone) }}" />
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" required
                                            value="{{ old('email', $student->email) }}" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-md mb-4 mb-md-2">
                        <div class="accordion" id="accordionWithIcon">
                            <div class="card accordion-item">
                                <h2 class="accordion-header d-flex align-items-center">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionWithIcon-1" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user me-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        Data Ayah
                                    </button>
                                </h2>

                                <div id="accordionWithIcon-1" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="father_nik" class="form-label">NIK</label>
                                                    <input type="text"
                                                        class="form-control @error('father_nik') is-invalid @enderror"
                                                        id="father_nik" name="father_nik"
                                                        value="{{ old('father_nik', optional($student->father)->nik) }}" />

                                                    @error('father_nik')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_kk_number" class="form-label">Nomor KK</label>
                                                    <input type="text"
                                                        class="form-control @error('father_kk_number') is-invalid @enderror"
                                                        id="father_kk_number" name="father_kk_number"
                                                        value="{{ old('father_kk_number', optional($student->father)->kk_number) }}" />
                                                    @error('father_kk_number')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="father_name" class="form-label">Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('father_name') is-invalid @enderror"
                                                id="father_name" name="father_name"
                                                value="{{ old('father_name', optional($student->father)->name) }}" />
                                            @error('father_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="father_pob" class="form-label">Tempat Lahir</label>
                                                    <input type="text"
                                                        class="form-control @error('father_pob') is-invalid @enderror"
                                                        id="father_pob" name="father_pob"
                                                        value="{{ old('father_pob', optional($student->father)->pob) }}" />
                                                    @error('father_pob')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_dob" class="form-label">Tempat Lahir</label>
                                                    <input type="date"
                                                        class="form-control @error('father_dob') is-invalid @enderror"
                                                        id="father_dob" name="father_dob"
                                                        value="{{ old('father_dob', optional($student->father)->dob) }}" />
                                                    @error('father_dob')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="father_education" class="form-label">Pendikan
                                                        Terakhir</label>
                                                    <input type="text"
                                                        class="form-control @error('father_education') is-invalid @enderror"
                                                        id="father_education" name="father_education"
                                                        value="{{ old('father_education', optional($student->father)->education) }}" />
                                                    @error('father_education')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_job" class="form-label">Pekerjaan</label>
                                                    <input type="text"
                                                        class="form-control @error('father_job') is-invalid @enderror"
                                                        id="father_job" name="father_job"
                                                        value="{{ old('father_job', optional($student->father)->job) }}" />
                                                    @error('father_job')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="father_religion" class="form-label">Agama</label>
                                                    <input type="text"
                                                        class="form-control @error('father_religion') is-invalid @enderror"
                                                        id="father_religion" name="father_religion"
                                                        value="{{ old('father_religion', optional($student->father)->religion) }}" />
                                                    @error('father_religion')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="father_phone" class="form-label">No. Telepon</label>
                                                    <input type="text"
                                                        class="form-control @error('father_phone') is-invalid @enderror"
                                                        id="father_phone" name="father_phone"
                                                        value="{{ old('father_phone', optional($student->father)->phone) }}" />
                                                    @error('father_phone')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_email" class="form-label">Email</label>
                                                    <input type="email"
                                                        class="form-control @error('father_email') is-invalid @enderror"
                                                        id="father_email" name="father_email"
                                                        value="{{ old('father_email', optional($student->father)->email) }}" />
                                                    @error('father_email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="father_address" class="form-label">Alamat Lengkap</label>
                                            <textarea name="father_address" class="form-control @error('father_address') is-invalid @enderror"
                                                id="father_address" cols="30" rows="3">{{ old('father_address', optional($student->father)->address) }}</textarea>
                                            @error('father_address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="father_province" class="form-label">Provinsi</label>
                                                    <input type="text"
                                                        class="form-control @error('father_province') is-invalid @enderror"
                                                        id="father_province" name="father_province"
                                                        value="{{ old('father_province', optional($student->father)->province) }}" />
                                                    @error('father_province')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_city" class="form-label">Kota / Kabupaten</label>
                                                    <input type="text"
                                                        class="form-control @error('father_city') is-invalid @enderror"
                                                        id="father_city" name="father_city"
                                                        value="{{ old('father_city', optional($student->father)->city) }}" />
                                                    @error('father_city')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="father_subdistrict" class="form-label">Kecamatan</label>
                                                    <input type="text"
                                                        class="form-control @error('father_subdistrict') is-invalid @enderror"
                                                        id="father_subdistrict"name="father_subdistrict"
                                                        value="{{ old('father_subdistrict', optional($student->father)->subdistrict) }}" />
                                                    @error('father_subdistrict')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_regency" class="form-label">Kelurahan</label>
                                                    <input type="text"
                                                        class="form-control @error('father_regency') is-invalid @enderror"
                                                        id="father_regency" name="father_regency"
                                                        value="{{ old('father_regency', optional($student->father)->regency) }}" />
                                                    @error('father_regency')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header d-flex align-items-center">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionWithIcon-2" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user me-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        Data Ibu
                                    </button>
                                </h2>
                                <div id="accordionWithIcon-2" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="mother_nik" class="form-label">NIK</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_nik') is-invalid @enderror"
                                                        id="mother_nik" name="mother_nik"
                                                        value="{{ old('mother_nik', optional($student->mother)->nik) }}" />
                                                    @error('mother_nik')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_kk_number" class="form-label">Nomor KK</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_kk_number') is-invalid @enderror"
                                                        id="mother_kk_number" name="mother_kk_number"
                                                        value="{{ old('mother_kk_number', optional($student->mother)->kk_number) }}" />
                                                    @error('mother_kk_number')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mother_name" class="form-label">Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('mother_name') is-invalid @enderror"
                                                id="mother_name" name="mother_name"
                                                value="{{ old('mother_name', optional($student->mother)->name) }}" />
                                            @error('mother_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="mother_pob" class="form-label">Tempat Lahir</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_pob') is-invalid @enderror"
                                                        id="mother_pob" name="mother_pob"
                                                        value="{{ old('mother_pob', optional($student->mother)->pob) }}" />
                                                    @error('mother_pob')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_dob" class="form-label">Tempat Lahir</label>
                                                    <input type="date"
                                                        class="form-control @error('mother_dob') is-invalid @enderror"
                                                        id="mother_dob" name="mother_dob"
                                                        value="{{ old('mother_dob', optional($student->mother)->dob) }}" />
                                                    @error('mother_dob')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="mother_education" class="form-label">Pendikan
                                                        Terakhir</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_education') is-invalid @enderror"
                                                        id="mother_education" name="mother_education"
                                                        value="{{ old('mother_education', optional($student->mother)->education) }}" />
                                                    @error('mother_education')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_job" class="form-label">Pekerjaan</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_job') is-invalid @enderror"
                                                        id="mother_job" name="mother_job"
                                                        value="{{ old('mother_job', optional($student->mother)->job) }}" />
                                                    @error('mother_job')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="mother_religion" class="form-label">Agama</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_religion') is-invalid @enderror"
                                                        id="mother_religion" name="mother_religion"
                                                        value="{{ old('mother_religion', optional($student->mother)->religion) }}" />
                                                    @error('mother_religion')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="mother_phone" class="form-label">No. Telepon</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_phone') is-invalid @enderror"
                                                        id="mother_phone" name="mother_phone"
                                                        value="{{ old('mother_phone', optional($student->mother)->phone) }}" />
                                                    @error('mother_phone')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_email" class="form-label">Email</label>
                                                    <input type="email"
                                                        class="form-control @error('mother_email') is-invalid @enderror"
                                                        id="mother_email" name="mother_email"
                                                        value="{{ old('mother_email', optional($student->mother)->email) }}" />
                                                    @error('mother_email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mother_address" class="form-label">Alamat Lengkap</label>
                                            <textarea name="mother_address" class="form-control @error('mother_address') is-invalid @enderror"
                                                id="mother_address" cols="30" rows="3">{{ old('mother_address', optional($student->mother)->address) }}</textarea>
                                            @error('mother_address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="mother_province" class="form-label">Provinsi</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_province') is-invalid @enderror"
                                                        id="mother_province" name="mother_province"
                                                        value="{{ old('mother_province', optional($student->mother)->province) }}" />
                                                    @error('mother_province')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_city" class="form-label">Kota / Kabupaten</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_city') is-invalid @enderror"
                                                        id="mother_city" name="mother_city"
                                                        value="{{ old('mother_city', optional($student->mother)->city) }}" />
                                                    @error('mother_city')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="mother_subdistrict" class="form-label">Kecamatan</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_subdistrict') is-invalid @enderror"
                                                        id="mother_subdistrict" name="mother_subdistrict"
                                                        value="{{ old('mother_subdistrict', optional($student->mother)->subdistrict) }}" />
                                                    @error('mother_subdistrict')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_regency" class="form-label">Kelurahan</label>
                                                    <input type="text"
                                                        class="form-control @error('mother_regency') is-invalid @enderror"
                                                        id="mother_regency" name="mother_regency"
                                                        value="{{ old('mother_regency', optional($student->mother)->regency) }}" />
                                                    @error('mother_regency')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header d-flex align-items-center">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionWithIcon-3" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user me-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        Data Wali
                                    </button>
                                </h2>
                                <div id="accordionWithIcon-3" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="custodian_nik" class="form-label">NIK</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_nik') is-invalid @enderror"
                                                        id="custodian_nik" name="custodian_nik"
                                                        value="{{ old('custodian_nik', optional($student->custodian)->nik) }}" />
                                                    @error('custodian_nik')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="custodian_kk_number" class="form-label">Nomor KK</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_kk_number') is-invalid @enderror"
                                                        id="custodian_kk_number" name="custodian_kk_number"
                                                        value="{{ old('custodian_kk_number', optional($student->custodian)->kk_number) }}" />
                                                    @error('custodian_kk_number')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="custodian_name" class="form-label">Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('custodian_name') is-invalid @enderror"
                                                id="custodian_name" name="custodian_name"
                                                value="{{ old('custodian_name', optional($student->custodian)->name) }}" />
                                            @error('custodian_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="custodian_pob" class="form-label">Tempat Lahir</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_pob') is-invalid @enderror"
                                                        id="custodian_pob" name="custodian_pob"
                                                        value="{{ old('custodian_pob', optional($student->custodian)->pob) }}" />
                                                    @error('custodian_pob')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="custodian_dob" class="form-label">Tempat Lahir</label>
                                                    <input type="date"
                                                        class="form-control @error('custodian_dob') is-invalid @enderror"
                                                        id="custodian_dob" name="custodian_dob"
                                                        value="{{ old('custodian_dob', optional($student->custodian)->dob) }}" />
                                                    @error('custodian_dob')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="custodian_education" class="form-label">Pendikan
                                                        Terakhir</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_education') is-invalid @enderror"
                                                        id="custodian_education" name="custodian_education"
                                                        value="{{ old('custodian_education', optional($student->custodian)->education) }}" />
                                                    @error('custodian_education')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="custodian_job" class="form-label">Pekerjaan</label>
                                                    <input type="date"
                                                        class="form-control @error('custodian_job') is-invalid @enderror"
                                                        id="custodian_job" name="custodian_job"
                                                        value="{{ old('custodian_job', optional($student->custodian)->job) }}" />
                                                    @error('custodian_job')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="custodian_religion" class="form-label">Agama</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_religion') is-invalid @enderror"
                                                        id="custodian_religion" name="custodian_religion"
                                                        value="{{ old('custodian_religion', optional($student->custodian)->religion) }}" />
                                                    @error('custodian_religion')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="custodian_phone" class="form-label">No. Telepon</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_phone') is-invalid @enderror"
                                                        id="custodian_phone" name="custodian_phone"
                                                        value="{{ old('custodian_phone', optional($student->custodian)->phone) }}" />
                                                    @error('custodian_phone')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="custodian_email" class="form-label">Email</label>
                                                    <input type="email"
                                                        class="form-control @error('custodian_email') is-invalid @enderror"
                                                        id="custodian_email" name="custodian_email"
                                                        value="{{ old('custodian_email', optional($student->custodian)->email) }}" />
                                                    @error('custodian_email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="custodian_address" class="form-label">Alamat Lengkap</label>
                                            <textarea name="custodian_address" class="form-control @error('custodian_address') is-invalid @enderror"
                                                id="custodian_address" cols="30" rows="3">{{ old('custodian_address', optional($student->custodian)->address) }}</textarea>
                                            @error('custodian_address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="custodian_province" class="form-label">Provinsi</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_province') is-invalid @enderror"
                                                        id="custodian_province" name="custodian_province"
                                                        value="{{ old('custodian_province', optional($student->custodian)->province) }}" />
                                                    @error('custodian_province')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="custodian_city" class="form-label">Kota /
                                                        Kabupaten</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_city') is-invalid @enderror"
                                                        id="custodian_city" name="custodian_city"
                                                        value="{{ old('custodian_city', optional($student->custodian)->city) }}" />
                                                    @error('custodian_city')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="custodian_subdistrict"
                                                        class="form-label">Kecamatan</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_subdistrict') is-invalid @enderror"
                                                        id="custodian_subdistrict" name="custodian_subdistrict"
                                                        value="{{ old('custodian_subdistrict', optional($student->custodian)->subdistrict) }}" />
                                                    @error('custodian_subdistrict')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="custodian_regency" class="form-label">Kelurahan</label>
                                                    <input type="text"
                                                        class="form-control @error('custodian_regency') is-invalid @enderror"
                                                        id="custodian_regency" name="custodian_regency"
                                                        value="{{ old('custodian_regency', optional($student->custodian)->regency) }}" />
                                                    @error('custodian_regency')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label d-block">Jenis Kelamin</label>
                                            <div class="form-check form-check-inline mt-3 me-3">
                                                <input class="form-check-input" type="radio" name="custodian_gender"
                                                    id="male" value="male"
                                                    {{ old('custodian_gender', optional($student->custodian)->gender) == 'male' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="male">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="custodian_gender"
                                                    id="female" value="female"
                                                    {{ old('custodian_gender', optional($student->custodian)->gender) == 'female' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="female">Perempuan</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header d-flex align-items-center">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionWithIcon-4" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-script me-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M17 20h-11a3 3 0 0 1 0 -6h11a3 3 0 0 0 0 6h1a3 3 0 0 0 3 -3v-11a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8" />
                                        </svg>
                                        Kelengkapan Berkas
                                    </button>
                                </h2>
                                <div id="accordionWithIcon-4" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <label for="image_akte_kelahiran" class="form-label">Akte Kelahiran</label>
                                            <input type="file"
                                                class="form-control @error('image_akte_kelahiran') is-invalid @enderror"
                                                id="image_akte_kelahiran" name="image_akte_kelahiran[]"
                                                {{ optional($student->registration)->status == 'approved' ? 'required' : '' }}
                                                accept="image/*" />
                                            @if ($student->registration && $student->registration->getFirstMediaUrl('akta_kelahiran_images'))
                                                <img src="{{ $student->registration->getFirstMediaUrl('akta_kelahiran_images') }}"
                                                    class="img-fluid mt-2 w-25">
                                            @endif
                                            @error('image_akte_kelahiran')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="ktp_foto" class="form-label">Foto KTP</label>
                                            <input type="file"
                                                class="form-control @error('ktp_foto') is-invalid @enderror"
                                                id="ktp_foto" name="ktp_foto[]"
                                                {{ optional($student->registration)->status == 'approved' ? 'required' : '' }}
                                                accept="image/*" />
                                            @if ($student->registration && $student->registration->getFirstMediaUrl('ktp_images'))
                                                <img src="{{ $student->registration->getFirstMediaUrl('ktp_images') }}"
                                                    class="img-fluid mt-2 w-25">
                                            @endif
                                            @error('ktp_foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="image_pas_foto" class="form-label">Pas Foto</label>
                                            <input type="file"
                                                class="form-control @error('image_pas_foto') is-invalid @enderror"
                                                id="image_pas_foto" name="image_pas_foto[]"
                                                {{ optional($student->registration)->status == 'approved' ? 'required' : '' }}
                                                accept="image/*" />
                                            @if ($student->registration && $student->registration->getFirstMediaUrl('pasfoto_images'))
                                                <img src="{{ $student->registration->getFirstMediaUrl('pasfoto_images') }}"
                                                    class="img-fluid mt-2 w-25">
                                            @endif
                                            @error('image_pas_foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="image_ijasah" class="form-label">Ijasah TK</label>
                                            <input type="file"
                                                class="form-control @error('image_ijasah') is-invalid @enderror"
                                                id="image_ijasah" name="image_ijasah[]"
                                                {{ optional($student->registration)->status == 'approved' ? 'required' : '' }}
                                                accept="image/*" />
                                            @if ($student->registration && $student->registration->getFirstMediaUrl('ijasah_tk_images'))
                                                <img src="{{ $student->registration->getFirstMediaUrl('ijasah_tk_images') }}"
                                                    class="img-fluid mt-2 w-25">
                                            @endif
                                            @error('image_ijasah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @if (optional($student->registration)->status == 'waiting')
                        <button class="btn btn-warning me-3" id="button-edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                            </svg>
                            Ubah
                        </button>
                    @elseif (optional($student->registration)->status == 'rejected')
                        <button class="btn btn-success me-3" id="button-resubmit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rotate">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19.95 11a8 8 0 1 0 -.5 4m.5 5v-5h-5" />
                            </svg>
                            Daftar Ulang
                        </button>
                    @elseif (optional($student->registration) && optional($student->registration)->status != 'approved')
                        <button class="btn btn-primary me-3" id="button-save">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy me-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>
                            Simpan
                        </button>
                    @endif

                    <button type="button" class="btn btn-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-printer me-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                            <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                        </svg>
                        Cetak
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $('#button-edit').on('click', function() {
            $('#form-registration').attr('action', "{{ route('registration.update', $student->id) }}");
            $('#form-registration input[name="_method"]').remove();
            $('#form-registration').append('<input type="hidden" name="_method" value="PATCH">');
            // $('#form-registration').submit();
        })

        $('#button-save').on('click', function() {
            $('#form-registration').attr('action', "{{ route('registration.store', $student->id) }}");
            // $('#form-registration').submit();
        })

        $('#button-resubmit').on('click', function() {
            $('#form-registration').attr('action', "{{ route('registration.resubmit', $student->id) }}");
            $('#form-registration input[name="_method"]').remove();
            $('#form-registration').append('<input type="hidden" name="_method" value="PUT">');
            // $('#form-registration').submit();
        })
    </script>
@endpush
