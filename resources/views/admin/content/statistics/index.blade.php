@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-0">
    <h2 class="fw-bold mb-4" style="color: var(--kaure-navy);">Statistics & Achievements CMS</h2>

    <div class="kaure-card p-4">
        <h5 class="fw-bold mb-3">Manage Impact Statistics (Draft & Verified)</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Metric Key</th>
                        <th>Value</th>
                        <th>Label</th>
                        <th>Verification Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statistics as $stat)
                        <tr>
                            <td><code>{{ $stat->metric_key }}</code></td>
                            <td>
                                <form action="{{ url('/admin/cms/statistics/' . $stat->id) }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="metric_value" value="{{ $stat->metric_value }}" class="form-control form-control-sm" style="width: 100px;" required>
                            </td>
                            <td>
                                    <input type="text" name="label" value="{{ $stat->label }}" class="form-control form-control-sm" required>
                            </td>
                            <td>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" name="is_verified" value="1" class="form-check-input" {{ $stat->is_verified ? 'checked' : '' }} id="verify_{{ $stat->id }}">
                                        <label class="form-check-label small" for="verify_{{ $stat->id }}">Verified</label>
                                    </div>
                            </td>
                            <td>
                                    <button type="submit" class="btn btn-sm btn-kaure-primary">Update</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
