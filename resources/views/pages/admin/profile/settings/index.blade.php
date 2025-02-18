@extends('layouts.admin')

@section('title', 'PPDB - Profil')

@section('section-admin')
    <div class="container-xxl flex-grow-1 pt-0">

        <div class="row">
            <div class="col-md-12 mb-3">
                @include('components.nav-pills.profile-settings')

                <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                        <form id="formAccountSettings" method="GET" onsubmit="return false"
                            class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name">Nama Lengkap</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" id="name">
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                    <label class="form-label" for="currentPassword">Current Password</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control" type="password" name="currentPassword"
                                            id="currentPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                    <label class="form-label" for="newPassword">New Password</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control" type="password" id="newPassword" name="newPassword"
                                            placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                    <div class="input-group input-group-merge has-validation">
                                        <input class="form-control" type="password" name="confirmPassword"
                                            id="confirmPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
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
                            <input type="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
