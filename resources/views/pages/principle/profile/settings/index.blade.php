@extends('layouts.principle')

@section('title', 'PPDB - Profil')

@section('section-principle')
    <div class="container-xxl flex-grow-1 pt-0">

        <div class="row">
            <div class="col-md-12 mb-3">
                @include('components.nav-pills.profile-settings')

                <div class="card mb-4">
                    <h5 class="card-header">Pengaturan</h5>
                    <div class="card-body">
                        <form action="{{ route('principle.settings.update') }}" method="POST"
                            class="fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="name">Nama Lengkap</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" id="name"
                                            value="{{ old('name', auth()->user()->principle->name) }}">
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="email">Alamat Surel</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" id="email"
                                            value="{{ old('email', auth()->user()->principle->email) }}">
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="phone">Nomor Telepon</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" id="phone"
                                            value="{{ old('phone', auth()->user()->principle->phone) }}">
                                    </div>
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                    <label class="form-label" for="newPassword">Password Baru</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control @error('newPassword') is-invalid @enderror"
                                            type="password" id="newPassword" name="newPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                    @error('newPassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                    <label class="form-label" for="confirmPassword">Konfirmasi Password</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control @error('confirmPassword') is-invalid @enderror"
                                            type="password" name="confirmPassword" id="confirmPassword"
                                            placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                    @error('confirmPassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <h6>Password Requirements:</h6>
                                    <ul class="ps-3 mb-0">
                                        <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                                        <li class="mb-1">At least one lowercase character</li>
                                        <li>At least one number, symbol, or whitespace character</li>
                                    </ul>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
