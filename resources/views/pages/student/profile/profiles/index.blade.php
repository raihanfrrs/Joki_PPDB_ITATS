@extends('layouts.student')

@section('title', 'PPDB - Profil Saya')

@section('section-student')
    <div class="container-xxl flex-grow-1 pt-0">

        <div class="row">
            <div class="col-md-12">
                @include('components.nav-pills.profile-settings')
                <form method="POST">
                    @csrf
                    <div class="card mb-2">
                        <h5 class="card-header">Rincian Profil</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ auth()->user()->student->registration->getFirstMediaUrl('pasfoto_images') }}"
                                    alt="{{ auth()->user()->student->name }}" class="d-block w-px-100 h-px-100 rounded"
                                    id="uploadedAvatar" />
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                                    <input class="form-control" type="text" id="nisn" name="nisn"
                                        value="{{ auth()->user()->student->nisn }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                                    <input class="form-control" type="text" name="nik" id="nik"
                                        value="{{ auth()->user()->student->nik }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="kk_number" class="form-label">Nomor Kartu Keluarga</label>
                                    <input class="form-control" type="text" name="kk_number" id="kk_number"
                                        value="{{ auth()->user()->student->kk_number }}" autofocus />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        value="{{ auth()->user()->student->name }}" disabled />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="email" class="form-label">Alamat Surel</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ auth()->user()->student->email }}" />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input class="form-control" type="text" name="phone" id="phone"
                                        value="{{ auth()->user()->student->phone }}" disabled />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization" name="organization"
                                        value="Pixinvent" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">US (+1)</span>
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input class="form-control" type="text" id="state" name="state"
                                        placeholder="California" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zipCode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                        placeholder="231465" maxlength="6" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select id="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">Language</label>
                                    <select id="language" class="select2 form-select">
                                        <option value="">Select Language</option>
                                        <option value="en">English</option>
                                        <option value="fr">French</option>
                                        <option value="de">German</option>
                                        <option value="pt">Portuguese</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">Timezone</label>
                                    <select id="timeZones" class="select2 form-select">
                                        <option value="">Select Timezone</option>
                                        <option value="-12">(GMT-12:00) International Date Line West</option>
                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                        <option value="-9">(GMT-09:00) Alaska</option>
                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                        <option value="-7">(GMT-07:00) Arizona</option>
                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                        <option value="-6">(GMT-06:00) Central America</option>
                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select id="currency" class="select2 form-select">
                                        <option value="">Select Currency</option>
                                        <option value="usd">USD</option>
                                        <option value="euro">Euro</option>
                                        <option value="pound">Pound</option>
                                        <option value="bitcoin">Bitcoin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>

                    <div class="accordion" id="accordionWithIcon">
                        <div class="card accordion-item">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-1" aria-expanded="false">
                                    <i class="ti ti-star ti-xs me-2"></i>
                                    Header Option 1
                                </button>
                            </h2>

                            <div id="accordionWithIcon-1" class="accordion-collapse collapse" style="">
                                <div class="accordion-body">
                                    Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps
                                    icing
                                    marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry
                                    topping
                                    soufflé. Wafer gummi bears marshmallow pastry pie.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-2" aria-expanded="false">
                                    <i class="me-2 ti ti-sun ti-xs"></i>
                                    Header Option 2
                                </button>
                            </h2>
                            <div id="accordionWithIcon-2" class="accordion-collapse collapse" style="">
                                <div class="accordion-body">
                                    Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat
                                    cake
                                    dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut
                                    gummies.
                                    Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card">
                            <h2 class="accordion-header d-flex align-items-center">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWithIcon-3" aria-expanded="false">
                                    <i class="me-2 ti ti-moon ti-xs"></i>
                                    Header Option 3
                                </button>
                            </h2>
                            <div id="accordionWithIcon-3" class="accordion-collapse collapse" style="">
                                <div class="accordion-body">
                                    Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake.
                                    Bonbon
                                    gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat
                                    cake
                                    dragée caramels. Ice cream wafer danish cookie caramels muffin.
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
