@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Training Management</h2>

    <div class="kaure-card p-4">
        <h5 class="fw-bold mb-3">Training Programs & Schedules</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Program Title</th>
                        <th>Category</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($programs as $prog)
                        <tr>
                            <td class="fw-semibold">{{ $prog->title }}</td>
                            <td>{{ $prog->category->name ?? 'General' }}</td>
                            <td>{{ $prog->duration ?? 'N/A' }}</td>
                            <td><a href="#" class="btn btn-sm btn-outline-primary">Manage Attendance & Progress</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">No training programs configured.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $programs->links() }}
    </div>
</div>
@endsection
