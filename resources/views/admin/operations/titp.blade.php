@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Technical Intern Training Program (TITP) Management</h2>

    <div class="kaure-card p-4">
        <h5 class="fw-bold mb-3">TITP Opportunities & Internships</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Employer</th>
                        <th>Industry</th>
                        <th>Vacancies</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($opportunities as $opp)
                        <tr>
                            <td class="fw-semibold">{{ $opp->title }}</td>
                            <td>{{ $opp->employer->company_name ?? 'N/A' }}</td>
                            <td>{{ $opp->industry }}</td>
                            <td>{{ $opp->vacancies }}</td>
                            <td><span class="badge bg-success">{{ $opp->status }}</span></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No TITP opportunities listed yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $opportunities->links() }}
    </div>
</div>
@endsection
