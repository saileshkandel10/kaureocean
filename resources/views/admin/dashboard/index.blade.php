@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0" style="color: var(--kaure-navy);">Dashboard Overview</h2>
        <span class="badge bg-warning text-dark font-jp">ライセンス番号：221/082/083</span>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="kaure-card p-3 border-start border-4 border-primary">
                <span class="text-muted small d-block">Total Candidates</span>
                <h3 class="fw-bold mb-0 text-navy" style="color: var(--kaure-navy);">{{ $totalCandidates }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kaure-card p-3 border-start border-4 border-warning">
                <span class="text-muted small d-block">New Applications</span>
                <h3 class="fw-bold mb-0 text-navy" style="color: var(--kaure-navy);">{{ $newApplications }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kaure-card p-3 border-start border-4 border-success">
                <span class="text-muted small d-block">Candidates In Training</span>
                <h3 class="fw-bold mb-0 text-navy" style="color: var(--kaure-navy);">{{ $inTraining }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kaure-card p-3 border-start border-4 border-danger">
                <span class="text-muted small d-block">Total Enquiries</span>
                <h3 class="fw-bold mb-0 text-navy" style="color: var(--kaure-navy);">{{ $totalEnquiries }}</h3>
            </div>
        </div>
    </div>

    <!-- Recent Activity / Applications -->
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3" style="color: var(--kaure-navy);">Recent Candidate Applications</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Candidate</th>
                                <th>Program Type</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentApplications as $app)
                                <tr>
                                    <td>{{ $app->candidate->full_name ?? 'N/A' }}</td>
                                    <td>{{ $app->program_type }}</td>
                                    <td><span class="badge bg-secondary">{{ $app->status }}</span></td>
                                    <td>{{ $app->created_at->format('M d, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">No recent applications found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3" style="color: var(--kaure-navy);">Recent Enquiries</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                    @forelse($recentMessages as $msg)
                        <li class="border-bottom pb-2">
                            <strong class="d-block small text-navy">{{ $msg->full_name }}</strong>
                            <span class="text-muted small d-block">{{ Str::limit($msg->message, 50) }}</span>
                            <span class="text-muted" style="font-size: 0.7rem;">{{ $msg->created_at->diffForHumans() }}</span>
                        </li>
                    @empty
                        <li class="text-muted small">No recent messages.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
