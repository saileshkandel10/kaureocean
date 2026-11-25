@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Services Management</h2>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Add New Service</h5>
                <form action="{{ url('/admin/cms/services') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Icon (FontAwesome)</label>
                        <input type="text" name="icon" class="form-control" placeholder="fas fa-graduation-cap">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Description</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-kaure-primary w-100">Add Service</button>
                </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Existing Services</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($services as $service)
                                <tr>
                                    <td class="fw-semibold"><i class="{{ $service->icon }} me-2 text-primary"></i> {{ $service->title }}</td>
                                    <td>{{ Str::limit($service->description, 60) }}</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">No services found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
