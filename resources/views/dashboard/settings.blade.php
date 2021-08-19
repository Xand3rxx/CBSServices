@extends('layouts.dashboard')
@section('title', 'Settings')
@section('content')
@include('layouts.partials._messages')

<div class="container-xl ">
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="color: #333 !important">{{ Session::get('success') }}</strong>
    </div>
    @endif
    <h1 class="app-page-title">Settings</h1>
    <hr class="mb-4">

    <div class="row g-4 settings-section">
        <div class="col-12 col-md-4">
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
                        <button type="submit" class="btn app-btn-primary">Save Changes</button>
                    </form>
                </div><!--//app-card-body-->
            </div><!--//app-card-->
        </div>
    </div>
    <hr class="mb-4">
    <div class="row g-4 settings-section">
        <div class="col-12 col-md-4">
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
                        <button type="submit" class="btn app-btn-primary">Save Changes</button>
                    </form>
                </div><!--//app-card-body-->

            </div><!--//app-card-->
        </div>
    </div>
</div><!--//container-fluid-->
@endsection
