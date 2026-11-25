@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="color: var(--kaure-navy);">Candidate Management</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.export.candidates') }}" class="btn btn-outline-success btn-sm"><i class="fas fa-file-csv me-1"></i> Export CSV</a>
            <a href="{{ url('/admin/candidates/create') }}" class="btn btn-kaure-primary btn-sm"><i class="fas fa-plus me-1"></i> Add Candidate</a>
        </div>
    </div>

    <div class="kaure-card p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($candidates as $candidate)
                        <tr>
                            <td class="fw-semibold">{{ $candidate->full_name }}</td>
                            <td>{{ $candidate->email }}</td>
                            <td>{{ $candidate->phone }}</td>
                            <td><span class="badge bg-primary">{{ $candidate->status }}</span></td>
                            <td>
                                <a href="{{ url('/admin/candidates/' . $candidate->id . '/edit') }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></a>
                                <form action="{{ url('/admin/candidates/' . $candidate->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No candidates registered yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $candidates->links() }}
    </div>
</div>
@endsection
