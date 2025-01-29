@extends('layouts.admin')

@section('title', 'PPDB - Master Principle - Edit')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Ubah Kepala Sekolah</h5>
                    <form action="{{ route('master.principle.update', $principle->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="image" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('principle_images') is-invalid @enderror"
                                        type="file" id="image" name="principle_images[]" accept="image/*"
                                        onchange="previewImage()">
                                    @if ($principle->getFirstMediaUrl('principle_images'))
                                        <img class="img-preview img-fluid mt-2 col-sm-5"
                                            src="{{ $principle->getFirstMediaUrl('principle_images') }}">
                                    @else
                                        <img class="img-preview img-fluid mt-2 col-sm-5">
                                    @endif
                                    @error('principle_images')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('nip') is-invalid @enderror" type="text"
                                        value="{{ old('nip', $principle->nip) }}" id="nip" name="nip" required>
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-md-2 col-form-label">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        value="{{ old('name', $principle->name) }}" id="name" name="name" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="title" class="col-md-2 col-form-label">Gelar</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('title') is-invalid @enderror" type="text"
                                        value="{{ old('title', $principle->title) }}" id="title" name="title"
                                        required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        value="{{ old('email', $principle->email) }}" id="email" name="email"
                                        required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-md-2 col-form-label">Phone</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('phone') is-invalid @enderror" type="tel"
                                        value="{{ old('phone', $principle->phone) }}" id="phone" name="phone"
                                        required>
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pob" class="col-md-2 col-form-label">Tempat Lahir</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('pob') is-invalid @enderror" type="pob"
                                        value="{{ old('pob', $principle->pob) }}" id="pob" name="pob" required>
                                    @error('pob')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="dob" class="col-md-2 col-form-label">Date</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('dob') is-invalid @enderror" type="date"
                                        value="{{ old('dob', $principle->dob ?? Carbon\Carbon::now()->format('Y-m-d')) }}"
                                        id="dob" name="dob" required>
                                    @error('dob')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gender" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-10">
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="male"
                                            {{ old('gender', $principle->gender ?? 'male') == 'male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female"
                                            {{ old('gender', $principle->gender) == 'female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="address" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-md-10">
                                    <textarea name="address" id="address" cols="30" rows="2"
                                        class="form-control @error('address') is-invalid @enderror">{{ old('address', $principle->address) }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="username" class="col-md-2 col-form-label">Username</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('username') is-invalid @enderror" type="text"
                                        value="{{ old('username', $principle->user->username) }}" id="username"
                                        name="username" required>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        id="password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
