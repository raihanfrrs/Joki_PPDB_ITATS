@extends('layouts.student')

@section('title', 'PPDB - Registration')

@section('section-student')
    <div class="container-xxl flex-grow-1 container-p-y">
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
                                        id="nisn" required value="{{ old('nisn') }}" />
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                        id="nik" required value="{{ old('nik') }}" />
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
                                required value="{{ old('name') }}" />
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
                                            value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="school_year" class="form-label">Tahun Kelulusan</label>
                                    <input type="text" class="form-control @error('school_year') is-invalid @enderror"
                                        id="school_year" placeholder="{{ date('Y') }}" required
                                        value="{{ old('school_year') }}" />
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
                                        id="pob" required value="{{ old('pob') }}" />
                                    @error('pob')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Tempat Lahir</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                        id="dob" required value="{{ old('dob') }}" />
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
                                rows="3" required>{{ old('address') }}</textarea>
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
                                        id="province" required value="{{ old('province') }}" />
                                    @error('province')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">Kota / Kabupaten</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                        id="city" required value="{{ old('city') }}" />
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
                                        id="subdistrict" required value="{{ old('subdistrict') }}" />
                                    @error('subdistrict')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="regency" class="form-label">Kelurahan</label>
                                    <input type="text" class="form-control @error('regency') is-invalid @enderror"
                                        id="regency" required value="{{ old('regency') }}" />
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
                                        id="religion" required value="{{ old('religion') }}" />
                                    @error('religion')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" required value="{{ old('phone') }}" />
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" required value="{{ old('email') }}" />
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
                                    <i class="ti ti-user ti-xs me-2"></i>
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
                                                    id="father_nik" value="{{ old('father_nik') }}" />
                                                @error('father_nik')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kk_number" class="form-label">Nomor KK</label>
                                                <input type="text"
                                                    class="form-control @error('kk_number') is-invalid @enderror"
                                                    id="kk_number" value="{{ old('kk_number') }}" />
                                                @error('kk_number')
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
                                            id="father_name" value="{{ old('father_name') }}" />
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
                                                    id="father_pob" value="{{ old('father_pob') }}" />
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
                                                    id="father_dob" value="{{ old('father_dob') }}" />
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
                                                <label for="father_education" class="form-label">Pendikan Terakhir</label>
                                                <input type="text"
                                                    class="form-control @error('father_education') is-invalid @enderror"
                                                    id="father_education" value="{{ old('father_education') }}" />
                                                @error('father_education')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="father_job" class="form-label">Pekerjaan</label>
                                                <input type="date"
                                                    class="form-control @error('father_job') is-invalid @enderror"
                                                    id="father_job" value="{{ old('father_job') }}" />
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
                                                    id="father_religion" required value="{{ old('father_religion') }}" />
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
                                                    id="father_phone" required value="{{ old('father_phone') }}" />
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
                                                    id="father_email" required value="{{ old('father_email') }}" />
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
                                            id="father_address" cols="30" rows="3" required>{{ old('father_address') }}</textarea>
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
                                                    id="father_province" required value="{{ old('father_province') }}" />
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
                                                    id="father_city" required value="{{ old('father_city') }}" />
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
                                                    id="father_subdistrict" required
                                                    value="{{ old('father_subdistrict') }}" />
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
                                                    id="father_regency" required value="{{ old('father_regency') }}" />
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
                                    <i class="me-2 ti ti-user ti-xs"></i>
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
                                                    id="mother_nik" value="{{ old('mother_nik') }}" />
                                                @error('mother_nik')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kk_number" class="form-label">Nomor KK</label>
                                                <input type="text"
                                                    class="form-control @error('kk_number') is-invalid @enderror"
                                                    id="kk_number" value="{{ old('kk_number') }}" />
                                                @error('kk_number')
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
                                            id="mother_name" value="{{ old('mother_name') }}" />
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
                                                    id="mother_pob" value="{{ old('mother_pob') }}" />
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
                                                    id="mother_dob" value="{{ old('mother_dob') }}" />
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
                                                <label for="mother_education" class="form-label">Pendikan Terakhir</label>
                                                <input type="text"
                                                    class="form-control @error('mother_education') is-invalid @enderror"
                                                    id="mother_education" value="{{ old('mother_education') }}" />
                                                @error('mother_education')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="mother_job" class="form-label">Pekerjaan</label>
                                                <input type="date"
                                                    class="form-control @error('mother_job') is-invalid @enderror"
                                                    id="mother_job" value="{{ old('mother_job') }}" />
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
                                                    id="mother_religion" required value="{{ old('mother_religion') }}" />
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
                                                    id="mother_phone" required value="{{ old('mother_phone') }}" />
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
                                                    id="mother_email" required value="{{ old('mother_email') }}" />
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
                                            id="mother_address" cols="30" rows="3" required>{{ old('mother_address') }}</textarea>
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
                                                    id="mother_province" required value="{{ old('mother_province') }}" />
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
                                                    id="mother_city" required value="{{ old('mother_city') }}" />
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
                                                    id="mother_subdistrict" required
                                                    value="{{ old('mother_subdistrict') }}" />
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
                                                    id="mother_regency" required value="{{ old('mother_regency') }}" />
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
                                    <i class="me-2 ti ti-user ti-xs"></i>
                                    Data Wali
                                </button>
                            </h2>
                            <div id="accordionWithIcon-3" class="accordion-collapse collapse" style="">
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="custodioan_nik" class="form-label">NIK</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_nik') is-invalid @enderror"
                                                    id="custodioan_nik" value="{{ old('custodioan_nik') }}" />
                                                @error('custodioan_nik')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="kk_number" class="form-label">Nomor KK</label>
                                                <input type="text"
                                                    class="form-control @error('kk_number') is-invalid @enderror"
                                                    id="kk_number" value="{{ old('kk_number') }}" />
                                                @error('kk_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="custodioan_name" class="form-label">Nama Lengkap</label>
                                        <input type="text"
                                            class="form-control @error('custodioan_name') is-invalid @enderror"
                                            id="custodioan_name" value="{{ old('custodioan_name') }}" />
                                        @error('custodioan_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="custodioan_pob" class="form-label">Tempat Lahir</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_pob') is-invalid @enderror"
                                                    id="custodioan_pob" value="{{ old('custodioan_pob') }}" />
                                                @error('custodioan_pob')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="custodioan_dob" class="form-label">Tempat Lahir</label>
                                                <input type="date"
                                                    class="form-control @error('custodioan_dob') is-invalid @enderror"
                                                    id="custodioan_dob" value="{{ old('custodioan_dob') }}" />
                                                @error('custodioan_dob')
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
                                                <label for="custodioan_education" class="form-label">Pendikan
                                                    Terakhir</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_education') is-invalid @enderror"
                                                    id="custodioan_education"
                                                    value="{{ old('custodioan_education') }}" />
                                                @error('custodioan_education')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="custodioan_job" class="form-label">Pekerjaan</label>
                                                <input type="date"
                                                    class="form-control @error('custodioan_job') is-invalid @enderror"
                                                    id="custodioan_job" value="{{ old('custodioan_job') }}" />
                                                @error('custodioan_job')
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
                                                <label for="custodioan_religion" class="form-label">Agama</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_religion') is-invalid @enderror"
                                                    id="custodioan_religion" required
                                                    value="{{ old('custodioan_religion') }}" />
                                                @error('custodioan_religion')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="custodioan_phone" class="form-label">No. Telepon</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_phone') is-invalid @enderror"
                                                    id="custodioan_phone" required
                                                    value="{{ old('custodioan_phone') }}" />
                                                @error('custodioan_phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="custodioan_email" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control @error('custodioan_email') is-invalid @enderror"
                                                    id="custodioan_email" required
                                                    value="{{ old('custodioan_email') }}" />
                                                @error('custodioan_email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="custodioan_address" class="form-label">Alamat Lengkap</label>
                                        <textarea name="custodioan_address" class="form-control @error('custodioan_address') is-invalid @enderror"
                                            id="custodioan_address" cols="30" rows="3" required>{{ old('custodioan_address') }}</textarea>
                                        @error('custodioan_address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="custodioan_province" class="form-label">Provinsi</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_province') is-invalid @enderror"
                                                    id="custodioan_province" required
                                                    value="{{ old('custodioan_province') }}" />
                                                @error('custodioan_province')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="custodioan_city" class="form-label">Kota / Kabupaten</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_city') is-invalid @enderror"
                                                    id="custodioan_city" required
                                                    value="{{ old('custodioan_city') }}" />
                                                @error('custodioan_city')
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
                                                <label for="custodioan_subdistrict" class="form-label">Kecamatan</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_subdistrict') is-invalid @enderror"
                                                    id="custodioan_subdistrict" required
                                                    value="{{ old('custodioan_subdistrict') }}" />
                                                @error('custodioan_subdistrict')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="custodioan_regency" class="form-label">Kelurahan</label>
                                                <input type="text"
                                                    class="form-control @error('custodioan_regency') is-invalid @enderror"
                                                    id="custodioan_regency" required
                                                    value="{{ old('custodioan_regency') }}" />
                                                @error('custodioan_regency')
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
                                                {{ old('custodian_gender') == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="male">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="custodian_gender"
                                                id="female" value="female"
                                                {{ old('custodian_gender') == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="female">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
