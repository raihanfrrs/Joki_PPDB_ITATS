@extends('layouts.admin')

@section('title', 'PPDB - Master Biaya Sekolah')

@section('section-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <h5 class="card-header">Tambah Biaya Sekolah</h5>
                    <form action="{{ route('master.school.fee.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="form" class="col-md-2 col-form-label">Formulir</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('form') is-invalid @enderror" type="text"
                                        id="form" name="form" required>
                                    <img class="img-preview img-fluid mt-2 col-sm-5">
                                    @error('form')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="form" class="col-md-2 col-form-label">Biaya Pengembangan</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('development_fund') is-invalid @enderror"
                                        type="text" id="development_fund" name="development_fund" required>
                                    <img class="img-preview img-fluid mt-2 col-sm-5">
                                    @error('development_fund')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="form" class="col-md-2 col-form-label">SPP</label>
                                <div class="col-md-10">
                                    <input
                                        class="form-control @error('education_development_donation') is-invalid @enderror"
                                        type="text" id="education_development_donation"
                                        name="education_development_donation" required>
                                    <img class="img-preview img-fluid mt-2 col-sm-5">
                                    @error('education_development_donation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="form" class="col-md-2 col-form-label">Seragam Batik</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('batik_uniform') is-invalid @enderror" type="text"
                                        id="batik_uniform" name="batik_uniform" required>
                                    <img class="img-preview img-fluid mt-2 col-sm-5">
                                    @error('batik_uniform')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="form" class="col-md-2 col-form-label">Seragam Pramuka</label>
                                <div class="col-md-10">
                                    <input class="form-control @error('scout_uniform') is-invalid @enderror" type="text"
                                        id="scout_uniform" name="scout_uniform" required>
                                    <img class="img-preview img-fluid mt-2 col-sm-5">
                                    @error('scout_uniform')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3 row">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
