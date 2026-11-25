@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Add New Candidate</h2>

    <div class="kaure-card p-4" style="max-width: 700px;">
        <form action="{{ url('/admin/candidates') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label small fw-semibold">Full Name</label>
                <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Status</label>
                <select name="status" class="form-select" required>
                    <option value="new">New</option>
                    <option value="in_training">In Training</option>
                    <option value="interview_ready">Interview Ready</option>
                    <option value="selected">Selected</option>
                    <option value="visa_processing">Visa Processing</option>
                    <option value="deployed">Deployed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-kaure-primary">Save Candidate</button>
            <a href="{{ url('/admin/candidates') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
