@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Employer Database</h2>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Add Employer</h5>
                <form action="{{ url('/admin/operations/employers') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Company Name</label>
                        <input type="text" name="company_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Industry</label>
                        <input type="text" name="industry" class="form-control" required placeholder="Agriculture / Caregiving">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Country</label>
                        <input type="text" name="country" class="form-control" value="Japan" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Contact Person</label>
                        <input type="text" name="contact_person" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-kaure-primary w-100">Add Employer</button>
                </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Registered Employers</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Industry</th>
                                <th>Country</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($employers as $emp)
                                <tr>
                                    <td class="fw-semibold">{{ $emp->company_name }}</td>
                                    <td>{{ $emp->industry }}</td>
                                    <td>{{ $emp->country }}</td>
                                    <td>{{ $emp->contact_person ?? 'N/A' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">No employers registered.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $employers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
