@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Testimonials Management</h2>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Add Testimonial</h5>
                <form action="{{ url('/admin/cms/testimonials') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Candidate Name</label>
                        <input type="text" name="candidate_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Program</label>
                        <input type="text" name="program" class="form-control" required placeholder="SSW Caregiving">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Destination</label>
                        <input type="text" name="destination" class="form-control" required placeholder="Tokyo, Japan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Quote / Review</label>
                        <textarea name="quote" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-kaure-primary w-100">Add Testimonial</button>
                </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Existing Testimonials</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Program</th>
                                <th>Destination</th>
                                <th>Quote</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($testimonials as $testi)
                                <tr>
                                    <td class="fw-semibold">{{ $testi->candidate_name }}</td>
                                    <td>{{ $testi->program }}</td>
                                    <td>{{ $testi->destination }}</td>
                                    <td>{{ Str::limit($testi->quote, 50) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">No testimonials found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $testimonials->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
