@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Company Profile Management</h2>

    <div class="kaure-card p-4" style="max-width: 800px;">
        <form action="{{ url('/admin/system/company-profile') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label small fw-semibold">Company Name</label>
                <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $profile->company_name ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">License Number</label>
                <input type="text" name="license_number" class="form-control" value="{{ old('license_number', $profile->license_number ?? '221/082/083') }}" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label small fw-semibold">Phone Number</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $profile->phone ?? '01-5923201') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label small fw-semibold">Email Address</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $profile->email ?? 'kaureocean7@gmail.com') }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Headquarters Address</label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $profile->address ?? 'Kathmandu-26, Samakhusi, Ranibari Marga, Nepal') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Office Hours</label>
                <input type="text" name="office_hours" class="form-control" value="{{ old('office_hours', $profile->office_hours ?? '9:00 AM - 5:30 PM (Nepal Time)') }}" required>
            </div>
            <button type="submit" class="btn btn-kaure-primary">Save Company Profile</button>
        </form>
    </div>
</div>
@endsection
