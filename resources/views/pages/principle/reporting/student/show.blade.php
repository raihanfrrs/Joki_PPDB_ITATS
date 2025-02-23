@extends('layouts.principle')

@section('title', 'PPDB - Detil Pembayaran')

@section('section-principle')
    <div class="container-xxl flex-grow-1 pt-2">
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
                                        id="nisn" name="nisn" required value="{{ $registration->student->nisn }}"
                                        disabled />
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" name="nik" required value="{{ $registration->student->nik }}"
                                        disabled />
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
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" required value="{{ $registration->student->name }}" disabled />
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
                                            value="male" {{ $registration->student->gender == 'male' ? 'checked' : '' }}
                                            disabled>
                                        <label class="form-check-label" for="male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female" {{ $registration->student->gender == 'female' ? 'checked' : '' }}
                                            disabled>
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="school_year" class="form-label">Tahun Kelulusan</label>
                                    <input type="text" class="form-control @error('school_year') is-invalid @enderror"
                                        id="school_year" name="school_year" placeholder="{{ date('Y') }}" required
                                        value="{{ $registration->student->school_year }}" disabled />
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
                                        id="pob" name="pob" required value="{{ $registration->student->pob }}"
                                        disabled />
                                    @error('pob')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Tempat Lahir</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                        id="dob" name="dob" required value="{{ $registration->student->dob }}"
                                        disabled />
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
                                rows="3" required disabled>{{ $registration->student->address }}</textarea>
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
                                        id="province" name="province" required disabled
                                        value="{{ $registration->student->province }}" />
                                    @error('province')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">Kota / Kabupaten</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                        id="city" name="city" required disabled
                                        value="{{ $registration->student->city }}" />
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
                                    <input type="text" class="form-control @error('subdistrict') is-invalid @enderror"
                                        id="subdistrict" name="subdistrict" required disabled
                                        value="{{ $registration->student->subdistrict }}" />
                                    @error('subdistrict')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="regency" class="form-label">Kelurahan</label>
                                    <input type="text" class="form-control @error('regency') is-invalid @enderror"
                                        id="regency" name="regency" required disabled
                                        value="{{ $registration->student->regency }}" />
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
                                    <input type="text" class="form-control @error('religion') is-invalid @enderror"
                                        id="religion" name="religion" required disabled
                                        value="{{ $registration->student->religion }}" />
                                    @error('religion')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" required disabled
                                        value="{{ $registration->student->phone }}" />
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" required disabled
                                        value="{{ $registration->student->email }}" />
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
                                                    value="{{ optional($registration->student->father)->nik }}"
                                                    disabled />

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
                                                    value="{{ optional($registration->student->father)->kk_number }}"
                                                    disabled />
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
                                            value="{{ optional($registration->student->father)->name }}" disabled />
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
                                                    value="{{ optional($registration->student->father)->pob }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->dob }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->education }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->job }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->religion }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->phone }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->email }}"
                                                    disabled />
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
                                            id="father_address" cols="30" rows="3" disabled>{{ optional($registration->student->father)->address }}</textarea>
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
                                                    value="{{ optional($registration->student->father)->province }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->city }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->subdistrict }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->father)->regency }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->nik }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->kk_number }}"
                                                    disabled />
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
                                            value="{{ optional($registration->student->mother)->name }}" disabled />
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
                                                    value="{{ optional($registration->student->mother)->pob }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->dob }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->education }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->job }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->religion }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->phone }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->email }}"
                                                    disabled />
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
                                            id="mother_address" cols="30" rows="3" disabled>{{ optional($registration->student->mother)->address }}</textarea>
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
                                                    value="{{ optional($registration->student->mother)->province }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->city }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->subdistrict }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->mother)->regency }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->nik }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->kk_number }}"
                                                    disabled />
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
                                            value="{{ optional($registration->student->custodian)->name }}" disabled />
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
                                                    value="{{ optional($registration->student->custodian)->pob }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->dob }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->education }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->job }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->religion }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->phone }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->email }}"
                                                    disabled />
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
                                            id="custodian_address" cols="30" rows="3" disabled>{{ optional($registration->student->custodian)->address }}</textarea>
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
                                                    value="{{ optional($registration->student->custodian)->province }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->city }}"
                                                    disabled />
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
                                                <label for="custodian_subdistrict" class="form-label">Kecamatan</label>
                                                <input type="text"
                                                    class="form-control @error('custodian_subdistrict') is-invalid @enderror"
                                                    id="custodian_subdistrict" name="custodian_subdistrict"
                                                    value="{{ optional($registration->student->custodian)->subdistrict }}"
                                                    disabled />
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
                                                    value="{{ optional($registration->student->custodian)->regency }}"
                                                    disabled />
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
                                                {{ optional($registration->student->custodian)->gender == 'male' ? 'checked' : '' }}
                                                disabled>
                                            <label class="form-check-label" for="male">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="custodian_gender"
                                                id="female" value="female"
                                                {{ optional($registration->student->custodian)->gender == 'female' ? 'checked' : '' }}
                                                disabled>
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
                                            {{ optional($registration)->status == 'approved' ? 'required' : '' }}
                                            accept="image/*" disabled />
                                        @if ($registration && $registration->getFirstMediaUrl('akta_kelahiran_images'))
                                            <img src="{{ $registration->getFirstMediaUrl('akta_kelahiran_images') }}"
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
                                            class="form-control @error('ktp_foto') is-invalid @enderror" id="ktp_foto"
                                            name="ktp_foto[]"
                                            {{ optional($registration)->status == 'approved' ? 'required' : '' }}
                                            accept="image/*" disabled />
                                        @if ($registration && $registration->getFirstMediaUrl('ktp_images'))
                                            <img src="{{ $registration->getFirstMediaUrl('ktp_images') }}"
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
                                            {{ optional($registration)->status == 'approved' ? 'required' : '' }}
                                            accept="image/*" disabled />
                                        @if ($registration && $registration->getFirstMediaUrl('pasfoto_images'))
                                            <img src="{{ $registration->getFirstMediaUrl('pasfoto_images') }}"
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
                                            {{ optional($registration)->status == 'approved' ? 'required' : '' }}
                                            accept="image/*" disabled />
                                        @if ($registration && $registration->getFirstMediaUrl('ijasah_tk_images'))
                                            <img src="{{ $registration->getFirstMediaUrl('ijasah_tk_images') }}"
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
                <button type="button" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer me-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                        <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                    </svg>
                    Cetak
                </button>
            </div>
        </div>

    </div>
@endsection
