@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Partners Management</h2>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Add Partner</h5>
                <form action="{{ url('/admin/cms/partners') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Partner Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Website URL</label>
                        <input type="url" name="website_url" class="form-control" placeholder="https://example.com">
                    </div>
                    <button type="submit" class="btn btn-kaure-primary w-100">Add Partner</button>
                </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="kaure-card p-4">
                <h5 class="fw-bold mb-3">Existing Partners</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($partners as $partner)
                                <tr>
                                    <td class="fw-semibold">{{ $partner->name }}</td>
                                    <td><a href="{{ $partner->website_url ?? '#' }}" target="_blank">{{ $partner->website_url ?? 'N/A' }}</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted py-4">No partners found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $partners->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
