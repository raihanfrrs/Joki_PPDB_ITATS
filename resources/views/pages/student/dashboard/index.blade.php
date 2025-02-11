@extends('layouts.student')

@section('section-student')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row overflow-hidden">
            <div class="col-12">
                <ul class="timeline timeline-center mt-5">
                    <li class="timeline-item {{ $student->registration ? 'pb-md-4 pb-5' : 'mb-4 border-0' }}">
                        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-feedly text-success">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7.833 12.278l4.445 -4.445" />
                                <path d="M10.055 14.5l2.223 -2.222" />
                                <path d="M12.278 16.722l.555 -.555" />
                                <path
                                    d="M19.828 14.828a4 4 0 0 0 0 -5.656l-5 -5a4 4 0 0 0 -5.656 0l-5 5a4 4 0 0 0 0 5.656l6.171 6.172h3.314l6.171 -6.172z" />
                            </svg>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-right">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="card-title mb-0">Pembuatan Akun Baru</h6>
                                <div class="meta">
                                    <span class="badge rounded-pill bg-label-success">Berhasil</span>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (!$student->registration)
                                    <a href="{{ route('registration') }}" class="btn btn-outline-primary btn-sm">
                                        Pendaftaran Disini
                                    </a>
                                @else
                                    <a href="{{ route('student.profile') }}" class="btn btn-outline-primary btn-sm">
                                        Lihat Biodata
                                    </a>
                                @endif

                            </div>
                            <div class="timeline-event-time">
                                {{ \Carbon\Carbon::parse($student->created_at)->format('d M Y') }}</div>
                        </div>
                    </li>

                    @if ($student->registration)
                        <li class="timeline-item {{ $student->payment->isNotEmpty() ? 'pb-md-4 pb-5' : 'mb-4 border-0' }}">
                            <span class="timeline-indicator timeline-indicator-success" data-aos="zoom-in"
                                data-aos-delay="200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-checklist {{ $student->registration->status == 'approved' ? 'text-success' : ($student->registration->status == 'rejected' ? 'text-danger' : 'text-warning') }}">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                                    <path d="M14 19l2 2l4 -4" />
                                    <path d="M9 8h4" />
                                    <path d="M9 12h2" />
                                </svg>
                            </span>
                            <div class="timeline-event card p-0" data-aos="fade-left">
                                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="card-title mb-0">Pendaftaran Siswa</h6>
                                    <div class="meta">
                                        @if ($student->registration->status == 'approved')
                                            <span class="badge rounded-pill bg-label-success">Diterima</span>
                                        @elseif ($student->registration->status == 'rejected')
                                            <span class="badge rounded-pill bg-label-danger">Ditolak</span>
                                        @else
                                            <span class="badge rounded-pill bg-label-warning">Menunggu</span>
                                        @endif

                                        @if ($student->registration->flag == 'resubmit')
                                            <span class="badge rounded-pill bg-label-primary">Daftar Ulang</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-2">Berkas pendaftaran</p>
                                    <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Lihat Berkas
                                    </button>
                                    <div class="collapse" id="collapseExample">
                                        <ul class="list-group list-group-flush mt-3">
                                            @if ($fatherFilled)
                                                <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                    <span>Data Ayah : <strong>Terisi</strong></span>
                                                    <i class="ti ti-check text-success"></i>
                                                </li>
                                            @else
                                                <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                    <span>Data Ayah : <strong>Belum Terisi</strong></span>
                                                    <i class="ti ti-x text-danger"></i>
                                                </li>
                                            @endif
                                            @if ($motherFilled)
                                                <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                    <span>Data Ibu : <strong>Terisi</strong></span>
                                                    <i class="ti ti-check text-success"></i>
                                                </li>
                                            @else
                                                <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                    <span>Data Ibu : <strong>Belum Terisi</strong></span>
                                                    <i class="ti ti-x text-danger"></i>
                                                </li>
                                            @endif
                                            @if ($custodianFilled)
                                                <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                    <span>Data Wali : <strong>Terisi</strong></span>
                                                    <i class="ti ti-check text-success"></i>
                                                </li>
                                            @else
                                                <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                    <span>Data Wali : <strong>Belum Terisi</strong></span>
                                                    <i class="ti ti-x text-danger"></i>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="timeline-event-time">
                                    {{ \Carbon\Carbon::parse($student->registration->updated_at)->format('d M Y') }}
                                </div>
                            </div>
                        </li>
                    @endif

                    @if ($student->payment)
                        @php
                            $latestApproved = optional($student->payment()->latest()->first())->status == 'approved';
                        @endphp

                        @foreach ($student->payment as $payment)
                            <li
                                class="timeline-item 
                            {{ $latestApproved ? 'pb-md-4 pb-5' : ($loop->last ? 'mb-4 border-0' : '') }} timeline-item-left">
                                <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in"
                                    data-aos-delay="200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay {{ $payment->status == 'approved' ? 'text-success' : ($payment->status == 'rejected' ? 'text-danger' : 'text-warning') }}">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                                        <path d="M3 10h18" />
                                        <path d="M16 19h6" />
                                        <path d="M19 16l3 3l-3 3" />
                                        <path d="M7.005 15h.005" />
                                        <path d="M11 15h2" />
                                    </svg>
                                </span>

                                <div class="timeline-event card p-0" data-aos="fade-right">
                                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="card-title mb-0">Pembayaran Siswa</h6>
                                        <div class="meta">
                                            @if ($payment->status == 'approved')
                                                <span class="badge rounded-pill bg-label-success">Diterima</span>
                                            @elseif ($payment->status == 'rejected')
                                                <span class="badge rounded-pill bg-label-danger">Ditolak</span>
                                            @else
                                                <span class="badge rounded-pill bg-label-warning">Menunggu</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <p class="mb-2">Foto Bukti Pembayaran</p>
                                        <button class="btn btn-outline-primary btn-sm" type="button"
                                            data-bs-target="#showPayment" data-bs-toggle="modal"
                                            id="button-trigger-modal-show-payment" data-id="{{ $payment->id }}">
                                            Bukti
                                        </button>
                                    </div>
                                    <div class="timeline-event-time">
                                        {{ \Carbon\Carbon::parse($payment->updated_at)->format('d M Y') }}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif

                    @if ($student->registration && optional($student->payment()->latest()->first())->status == 'approved')
                        <li class="timeline-item timeline-item-right mb-4 border-0">
                            <span class="timeline-indicator timeline-indicator-warning" data-aos="zoom-in"
                                data-aos-delay="200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check text-success">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" />
                                    <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />
                                    <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />
                                    <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />
                                    <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />
                                    <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                                    <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />
                                    <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" />
                                    <path d="M9 12l2 2l4 -4" />
                                </svg>
                            </span>
                            <div class="timeline-event card p-0" data-aos="fade-left">
                                <h6 class="card-header">Selamat Anda Telah Terdaftar Sebagai Siswa!</h6>
                                <div class="timeline-event-time">
                                    {{ \Carbon\Carbon::parse(optional($student->payment()->latest()->first())->created_at)->format('d M Y') }}
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
