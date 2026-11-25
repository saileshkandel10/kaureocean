@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Candidate Applications Pipeline</h2>

    <div class="kaure-card p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Candidate Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Program Type</th>
                        <th>Status</th>
                        <th>Applied Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $app)
                        <tr>
                            <td class="fw-semibold">{{ $app->candidate->full_name ?? 'N/A' }}</td>
                            <td>{{ $app->candidate->email ?? 'N/A' }}</td>
                            <td>{{ $app->candidate->phone ?? 'N/A' }}</td>
                            <td><span class="badge bg-secondary">{{ $app->program_type }}</span></td>
                            <td><span class="badge bg-primary">{{ $app->status }}</span></td>
                            <td>{{ $app->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">No applications received yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $applications->links() }}
    </div>
</div>
@endsection
