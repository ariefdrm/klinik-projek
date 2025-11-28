@extends('layouts.app_modern')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Welcome to Your Dashboard</h1>
        <p class="lead text-muted">Manage your account, view your data, and explore features all in one place.</p>
        <a href="{{ url('/profile') }}" class="btn btn-primary btn-lg mt-3">Go to Profile</a>
    </div>

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle display-4 text-primary mb-3"></i>
                    <h5 class="card-title">Profile</h5>
                    <p class="card-text">View and update your personal information.</p>
                    <a href="{{ url('/profile') }}" class="btn btn-outline-primary">View Profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-gear-fill display-4 text-success mb-3"></i>
                    <h5 class="card-title">Settings</h5>
                    <p class="card-text">Customize your preferences and account settings.</p>
                    <a href="{{ url('/settings') }}" class="btn btn-outline-success">Open Settings</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-bar-chart-line-fill display-4 text-warning mb-3"></i>
                    <h5 class="card-title">Reports</h5>
                    <p class="card-text">Check your activity and performance reports.</p>
                    <a href="{{ url('/reports') }}" class="btn btn-outline-warning">View Reports</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
