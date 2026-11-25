<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - Kaure Ocean CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-design-system.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/css/kaure-redesign.css') }}">
</head>
<body>
    <x-header />
    <x-breadcrumbs :items="['Apply Now' => '#']" />
    <x-page-banner title="Candidate Application Form" subtitle="Submit your application for Japanese language programs, SSW, or TITP pathways." jpTitle="お申し込み" />

    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="kaure-card p-5 shadow-lg border-0">
                        <h3 class="fw-bold mb-3" style="color: var(--kaure-navy);">Online Candidate Registration</h3>
                        <p class="text-muted small mb-4">Complete all sections below to submit your application to Kaure Ocean CRM.</p>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0 small">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('/apply-now') }}" method="POST">
                            @csrf
                            
                            <!-- Step 1: Personal Information -->
                            <h5 class="fw-bold text-navy mb-3" style="color: var(--kaure-navy);"><i class="fas fa-user me-2"></i> Step 1: Personal Information</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-semibold">Full Name</label>
                                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" required placeholder="Enter full name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-semibold">Date of Birth</label>
                                    <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-semibold">Email Address</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="name@example.com">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-semibold">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required placeholder="+977-98XXXXXXXX">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-semibold">Permanent / Current Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Kathmandu, Nepal">
                            </div>

                            <!-- Step 2: Education -->
                            <h5 class="fw-bold text-navy mb-3" style="color: var(--kaure-navy);"><i class="fas fa-graduation-cap me-2"></i> Step 2: Education</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label small fw-semibold">Education Level</label>
                                    <input type="text" name="education_level" class="form-control" value="{{ old('education_level') }}" placeholder="+2 / Bachelor">
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label class="form-label small fw-semibold">Institution Name</label>
                                    <input type="text" name="institution" class="form-control" value="{{ old('institution') }}" placeholder="School / University">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label small fw-semibold">Graduation Year</label>
                                    <input type="number" name="graduation_year" class="form-control" value="{{ old('graduation_year') }}" placeholder="2024">
                                </div>
                            </div>

                            <!-- Step 3: Experience -->
                            <h5 class="fw-bold text-navy mb-3 mt-4" style="color: var(--kaure-navy);"><i class="fas fa-briefcase me-2"></i> Step 3: Experience (Optional)</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label small fw-semibold">Job Title</label>
                                    <input type="text" name="job_title" class="form-control" value="{{ old('job_title') }}" placeholder="e.g. Caregiver / Worker">
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label class="form-label small fw-semibold">Company / Employer</label>
                                    <input type="text" name="company" class="form-control" value="{{ old('company') }}" placeholder="Company name">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label small fw-semibold">Duration</label>
                                    <input type="text" name="duration" class="form-control" value="{{ old('duration') }}" placeholder="2 Years">
                                </div>
                            </div>

                            <!-- Step 4 & 5: Program Preference & Japanese Level -->
                            <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <h5 class="fw-bold text-navy mb-3" style="color: var(--kaure-navy);"><i class="fas fa-star me-2"></i> Step 4: Program Preference</h5>
                                    <select name="program_type" class="form-select" required>
                                        <option value="">Select Program...</option>
                                        <option value="Japanese Language Training">Japanese Language Training</option>
                                        <option value="JLPT Preparation">JLPT Preparation</option>
                                        <option value="SSW">Specified Skilled Worker (SSW)</option>
                                        <option value="TITP">Technical Intern Training Program (TITP)</option>
                                        <option value="Technical Training">Technical Skill Training</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <h5 class="fw-bold text-navy mb-3" style="color: var(--kaure-navy);"><i class="fas fa-language me-2"></i> Step 5: Japanese Level</h5>
                                    <select name="japanese_level" class="form-select">
                                        <option value="No Knowledge">No Japanese Knowledge</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="JLPT N5">JLPT N5</option>
                                        <option value="JLPT N4">JLPT N4</option>
                                        <option value="JLPT N3">JLPT N3</option>
                                        <option value="JLPT N2">JLPT N2</option>
                                        <option value="JLPT N1">JLPT N1</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Step 6: Additional Information -->
                            <div class="mb-4 mt-4">
                                <h5 class="fw-bold text-navy mb-3" style="color: var(--kaure-navy);"><i class="fas fa-comment me-2"></i> Step 6: Additional Remarks</h5>
                                <textarea name="message" class="form-control" rows="3" placeholder="Any specific questions or career goals?">{{ old('message') }}</textarea>
                            </div>

                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="consent" required>
                                <label class="form-check-label small" for="consent">I consent to Kaure Ocean collecting and processing my data for educational and recruitment counseling in accordance with privacy policies.</label>
                            </div>

                            <button type="submit" class="btn btn-kaure-primary w-100 py-3 fw-bold">Submit Application</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
    <x-whatsapp-float />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
