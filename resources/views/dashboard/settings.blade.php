@extends('layouts.dashboard')
@section('title', 'Settings')
@section('content')
@include('layouts.partials._messages')

<div class="content-body">
    <div class="container pd-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="{{ route('cbs-dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                </ol>
            </nav>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col-lg-12 col-xl-12 mg-t-10">
                <div class="card mg-b-10">
                    <div class="row g-4 settings-section">
                        <div class="col-12 col-md-4 text-center">
                            <h3 class="section-title">General</h3>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                <div class="app-card-body">

                                    <form class="settings-form" method="POST" action="{{ route('cbs-profile-update') }}">
                                        @csrf @method('PATCH')
                                        <div class="mb-3">
                                            <label for="setting-input-11" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="setting-input-11" value="{{ old('name') ?? $profile->name }}" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="setting-input-22" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="setting-input-22" value="{{ old('email') ?? $profile->email }}" disabled>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row g-4 settings-section">
                        <div class="col-12 col-md-4 text-center">
                            <h3 class="section-title">Change Password</h3>
                            <div class="section-intro">To change your password, please enter your current password.</div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                <div class="app-card-body">
                                    <form class="settings-form" method="POST" action="{{ route('cbs-password-update') }}">
                                      @csrf @method('PUT')
                                        <div class="mb-3">
                                            <label for="setting-input-1" class="form-label">Current Password</label>
                                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="setting-input-1" name="current_password">
                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="setting-input-2" class="form-label">New Password</label>
                                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="setting-input-2" required name="new_password">
                                            <small style="font-size: 10px;" class="form-text text-muted">Password must be 8 characters at least.</small>
                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="setting-input-3" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control @error('new_confirm_password') is-invalid @enderror" id="setting-input-3" name="new_confirm_password">
                                            @error('new_confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div><!--//app-card-body-->

                            </div><!--//app-card-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
