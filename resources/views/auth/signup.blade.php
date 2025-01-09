@extends('layouts.guest')

@section('section-authentication')
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4 mt-2">
                <img src="{{ asset('assets/img/branding/tut-wuri-handayani.png') }}" alt="" class="img-fluid w-50">
            </div>
            <!-- /Logo -->
            <h4 class="mb-1 pt-2 text-center">Register an account</h4>

            <form id="formAuthentication" class="mb-3" action="{{ route('signup.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" placeholder="Enter your username" autofocus value="{{ old('username') }}" />
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn"
                        name="nisn" placeholder="Enter your NISN" value="{{ old('nisn') }}" />
                    @error('nisn')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="confirm-password">Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" id="confirm-password" name="confirm-password" class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="confirm-password" />
                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    </div>
                </div>

                <button class="btn btn-primary d-grid w-100">Sign up</button>
            </form>

            <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('signin') }}">
                    <span>Sign in instead</span>
                </a>
            </p>
        </div>
    </div>
@endsection
