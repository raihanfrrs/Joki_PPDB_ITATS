@extends('layouts.student')

@section('section-student')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row overflow-hidden">
            <div class="col-12">
                <ul class="timeline timeline-center mt-5">
                    <li class="timeline-item pb-md-4 pb-5">
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
                                @if (!optional($student->registration))
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

                    @if (optional($student->registration))
                        <li class="timeline-item pb-md-4 pb-5">
                            <span class="timeline-indicator timeline-indicator-success" data-aos="zoom-in"
                                data-aos-delay="200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-checklist {{ optional($student->registration)->status == 'approved' ? 'text-success' : (optional($student->registration)->status == 'rejected' ? 'text-danger' : 'text-warning') }}">
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
                                        @if (optional($student->registration)->status == 'approved')
                                            <span class="badge rounded-pill bg-label-success">Diterima</span>
                                        @elseif (optional($student->registration)->status == 'rejected')
                                            <span class="badge rounded-pill bg-label-danger">Ditolak</span>
                                        @else
                                            <span class="badge rounded-pill bg-label-warning">Menunggu</span>
                                        @endif

                                        @if (optional($student->registration)->flag == 'resubmit')
                                            <span class="badge rounded-pill bg-label-primary">Daftar Ulang</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-2">Cek berkas pendaftaran</p>
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
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="timeline-event-time">
                                    {{ \Carbon\Carbon::parse($student->registration->updated_at)->format('d M Y') }}</div>
                            </div>
                        </li>
                    @endif
                    <li class="timeline-item pb-md-4 pb-5">
                        <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ti ti-chart-line"></i>
                        </span>

                        <div class="timeline-event card p-0" data-aos="fade-right">
                            <h6 class="card-header">Financial Reports</h6>

                            <div class="card-body">
                                <p class="mb-2">Click the button below to read financial reports</p>
                                <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Show Report
                                </button>
                                <div class="collapse" id="collapseExample">
                                    <ul class="list-group list-group-flush mt-3">
                                        <li class="list-group-item d-flex justify-content-between flex-wrap">
                                            <span>Last Years's Profit : <strong>$20000</strong></span>
                                            <i class="ti ti-share cursor-pointer"></i>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between flex-wrap">
                                            <span> This Years's Profit : <strong>$25000</strong></span>
                                            <i class="ti ti-share cursor-pointer"></i>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between flex-wrap">
                                            <span> Last Years's Commission : <strong>$5000</strong></span>
                                            <i class="ti ti-share cursor-pointer"></i>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between flex-wrap">
                                            <span> This Years's Commission : <strong>$7000</strong></span>
                                            <i class="ti ti-share cursor-pointer"></i>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between flex-wrap">
                                            <span> This Years's Total Balance : <strong>$70000</strong></span>
                                            <i class="ti ti-share cursor-pointer"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-event-time">5th January</div>
                        </div>
                    </li>
                    <li class="timeline-item pb-md-4 pb-5">
                        <span class="timeline-indicator timeline-indicator-warning" data-aos="zoom-in"
                            data-aos-delay="200">
                            <i class="ti ti-chart-donut-2"></i>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-left">
                            <h6 class="card-header">Snacks</h6>
                            <div class="card-body">
                                <div class="d-flex flex-sm-row flex-column">
                                    <img src="../../assets/img/elements/10.jpg" class="rounded me-3 mb-sm-0 mb-2"
                                        alt="doughnut" height="64" width="64" />
                                    <div>
                                        <h6 class="mb-2">A Donut which straight gone to Your Tummy</h6>
                                        <p class="mb-2">
                                            I gaze longingly at the beautiful, perfect, plump donut. This is a delicately
                                            crafted
                                            piece of art. The mouthwatering mound of miraculous mush isn't able to escape my
                                            sight...<a href="javascript:void(0)">read more</a>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="ti ti-star text-warning"></i>
                                                <i class="ti ti-star text-warning"></i>
                                                <i class="ti ti-star text-warning"></i>
                                                <i class="ti ti-star text-warning"></i>
                                                <i class="ti ti-star"></i>
                                            </div>
                                            <div>
                                                <strong>$5.00</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-event-time">10th January</div>
                        </div>
                    </li>
                    <li class="timeline-item pb-md-4 pb-5 timeline-item-right">
                        <span class="timeline-indicator timeline-indicator-info" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ti ti-map-pin"></i>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-left">
                            <div class="card-header border-0 d-flex justify-content-between">
                                <h6 class="card-title mb-0">
                                    <i class="ti ti-map-pin"></i>
                                    <span class="align-middle">Location</span>
                                </h6>
                                <span class="badge rounded-pill bg-label-danger">High</span>
                            </div>
                            <div class="card-body py-0">
                                <h6 class="mb-2">Final location for the company celebration.</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quidem?</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="d-flex align-items-center flex-wrap cursor-pointer gap-3">
                                    <i class="ti ti-link"></i>
                                    <div class="position-relative">
                                        <i class="ti ti-brand-hipchat"></i>
                                        <span class="badge rounded-pill bg-info badge-dot badge-notifications"></span>
                                    </div>
                                    <i class="ti ti-user"></i>
                                </div>
                                <p class="mb-0">
                                    <span class="text-muted">Due Date:</span>
                                    15th Jan
                                </p>
                            </div>
                            <div class="timeline-event-time">12th January</div>
                        </div>
                    </li>
                    <li class="timeline-item pb-md-4 pb-5 timeline-item-left">
                        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in"
                            data-aos-delay="200">
                            <i class="ti ti-barbell"></i>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-right">
                            <div class="card-header border-0 d-flex justify-content-between">
                                <h6 class="card-title mb-0">Gym Program</h6>
                                <span class="text-muted">5:00 - 6:10AM</span>
                            </div>
                            <div class="card-body pb-3 pt-0">
                                <div class="hours mb-2">
                                    <i class="ti ti-clock"></i>
                                    <span>1.1 Hours</span>
                                    <i class="ti ti-arrows-right-left mx-2"></i>
                                    <span>Weekly</span>
                                </div>
                                <div class="location">
                                    <i class="ti ti-map-pin"></i>
                                    <span class="align-middle">Rock's Gym</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="tags">
                                    <span class="badge rounded-pill bg-label-danger">Gym</span>
                                    <span class="badge rounded-pill bg-label-info">Power</span>
                                </div>
                                <div>
                                    <i class="ti ti-dots-vertical text-muted cursor-pointer"></i>
                                </div>
                            </div>
                            <div class="timeline-event-time">15th January</div>
                        </div>
                    </li>
                    <li class="timeline-item pb-md-4 pb-5">
                        <span class="timeline-indicator timeline-indicator-success" data-aos="zoom-in"
                            data-aos-delay="200">
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-right">
                            <h6 class="card-header">General Reserve</h6>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-start align-items-center text-success mb-3">
                                        <i class="ti ti-currency-dollar ti-sm me-3"></i>
                                        <div class="ps-3 border-start">
                                            <small class="text-muted mb-1">Cash</small>
                                            <h5 class="mb-0">$500</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-start align-items-center text-info mb-3">
                                        <i class="ti ti-credit-card ti-sm me-3"></i>
                                        <div class="ps-3 border-start">
                                            <small class="text-muted mb-1">Credit Card</small>
                                            <h5 class="mb-0">$5000</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-start align-items-center text-primary">
                                        <i class="ti ti-chart-line ti-sm me-3"></i>
                                        <div class="ps-3 border-start">
                                            <small class="text-muted mb-1">Investments</small>
                                            <h5 class="mb-0">$300</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="timeline-event-time">16th January</div>
                        </div>
                    </li>
                    <li class="timeline-item pb-md-4 pb-5">
                        <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in"
                            data-aos-delay="200">
                            <i class="ti ti-server"></i>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-left">
                            <div class="card-header border-0 d-flex justify-content-between">
                                <h6 class="card-title mb-0">
                                    <span class="align-middle">Ubuntu Server</span>
                                </h6>
                                <span class="badge rounded-pill bg-label-danger">Inactive</span>
                            </div>
                            <div class="card-body pb-2 pt-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                                        <div>
                                            <i class="ti ti-world"></i>
                                            <span>IP Address</span>
                                        </div>
                                        <div>192.654.8.566</div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                                        <div>
                                            <i class="ti ti-cpu"></i>
                                            <span>CPU</span>
                                        </div>
                                        <div>4 Cores</div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                                        <div>
                                            <i class="ti ti-server"></i>
                                            <span>Ram</span>
                                        </div>
                                        <div>500 MB</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="server-icons">
                                    <i class="ti ti-share me-2"></i>
                                    <i class="ti ti-refresh"></i>
                                </div>
                            </div>
                            <div class="timeline-event-time">20th January</div>
                        </div>
                    </li>
                    <li class="timeline-item mb-4 border-0">
                        <span class="timeline-indicator timeline-indicator-info" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ti ti-building-store"></i>
                        </span>
                        <div class="timeline-event card p-0" data-aos="fade-right">
                            <div class="card-header border-0 d-flex justify-content-between">
                                <h6 class="card-title mb-0"><span class="align-middle">Online Store</span></h6>
                                <i class="ti ti-dots-vertical text-muted cursor-pointer"></i>
                            </div>
                            <div class="card-body pt-0">
                                <p>
                                    Develop an online store of electronic devices for the provided layout, as well as
                                    develop a
                                    mobile version of it. The must be compatible with any CMS.
                                </p>
                                <div class="d-flex flex-wrap flex-sm-row flex-column">
                                    <div class="mb-sm-0 mb-3 me-5">
                                        <p class="text-muted mb-2">Developers</p>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xs me-2">
                                                <span class="avatar-initial rounded-circle bg-label-primary">A</span>
                                            </div>
                                            <div class="avatar avatar-xs me-2">
                                                <span class="avatar-initial rounded-circle bg-label-success">B</span>
                                            </div>
                                            <div class="avatar avatar-xs">
                                                <span class="avatar-initial rounded-circle bg-label-danger">C</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-sm-0 mb-3 me-5">
                                        <p class="text-muted mb-2">Deadline</p>
                                        <p class="mb-0">20 Dec 2077</p>
                                    </div>
                                    <div>
                                        <p class="text-muted mb-2">Budget</p>
                                        <p class="mb-0">$50000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-event-time">25th January</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
