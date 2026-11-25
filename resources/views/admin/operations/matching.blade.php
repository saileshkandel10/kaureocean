@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Candidate Matching & Placement</h2>

    <div class="kaure-card p-4">
        <h5 class="fw-bold mb-3">Candidate to Job Opportunity Matching</h5>
        <p class="text-muted small mb-4">Review eligible candidates and link them to open SSW and TITP opportunities.</p>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Candidate Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($candidates as $cand)
                        <tr>
                            <td class="fw-semibold">{{ $cand->full_name }}</td>
                            <td>{{ $cand->email }}</td>
                            <td>{{ $cand->phone }}</td>
                            <td><span class="badge bg-primary">{{ $cand->status }}</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success"><i class="fas fa-link me-1"></i> Match Job</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No candidates available for matching.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
