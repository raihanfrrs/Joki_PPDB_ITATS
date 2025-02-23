@extends('layouts.guest')

@section('title', 'PPDB - Landing Page')

@section('section-guest')
    @include('partials.guest.header')

    <section class="section-py bg-body">
        <div class="container">
            <h2 class="text-center mb-4 text-decoration-underline">INFORMASI PPDB ONLINE</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-md-0 mb-4 fs-4" style="text-align: justify">
                            MI Darussalam Kepuhsari Kec. Balongbendo menyediakan ppdb secara online diharapkan proses PPDB
                            dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka.
                            Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan
                            mengakses website PPDB Online MI Darussalam Ds. Kepuhsari Kec. Balongbendo - Sidoarjo
                        </div>

                        <div class="col-md-6 mb-md-0 mb-4 fs-4" style="text-align: justify">
                            Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai
                            dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon
                            siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan
                            untuk proses selanjutnya
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-py">
        <div class="container">
            <h2 class="text-center mb-4 text-decoration-underline">ALUR PPDB MI DARUSSALAM KEPUHSARI</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row justify-content-center">
                        <img src="{{ asset('assets/img/pages/flowchart.png') }}" alt="alur ppdb mi darussalam"
                            class="img-fluid w-25">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
