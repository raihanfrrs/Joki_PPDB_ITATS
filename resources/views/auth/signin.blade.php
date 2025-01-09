@extends('layouts.guest')

@section('section-authentication')
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4 mt-2">
                <img src="{{ asset('assets/img/branding/tut-wuri-handayani.png') }}" alt="" class="img-fluid w-50">
            </div>
            <!-- /Logo -->
            <h4 class="mb-1 pt-2 text-center">Welcome to PPDB! 👋</h4>
            <p class="mb-4">Please sign-in to your account and start the adventure</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('signin.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" placeholder="Enter your username" autofocus />
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                    </div>
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
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
            </form>

            <p class="text-center">
                <span>Don't have an account?</span>
                <a href="{{ route('signup') }}">
                    <span>Create an account</span>
                </a>
            </p>
        </div>
    </div>
@endsection
