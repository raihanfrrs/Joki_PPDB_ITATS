@extends('layouts.guest')

@section('title', 'PPDB - Panduan')

@section('section-guest')
    @include('partials.guest.header')

    <section class="section-py">
        <div class="container">
            <h2 class="text-center mb-4 text-decoration-underline">PANDUAN PENDAFTARAN</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-12 mb-md-0 mb-4 fs-5" style="text-align: justify">
                            <ol>
                                <li>
                                    Pada bagian menu, klik ‘Pendaftaran’.
                                </li>
                                <li>
                                    Isi Seluruh formulir yang ditampilkan kemudian periksa kembali,
                                    pastikan tidak ada data yang salah.
                                </li>
                                <li>
                                    Klik Submit, kemudian klik confirm. setelah di-confirm, data tidak
                                    dapat diubah kembali.
                                </li>
                                <li>
                                    jika sudah, bukti pendaftaran akan ditampilkan dan dapat diunduh
                                    menjadi PDF.
                                </li>
                                <li>
                                    Upload bukti pembayaran, berupa foto
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
