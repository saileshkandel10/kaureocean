<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateApplication;
use App\Models\CandidateEducation;
use App\Models\CandidateExperience;
use Illuminate\Support\Str;

class CandidateFrontendController extends Controller
{
    public function showApplyForm()
    {
        return view('pages.apply-now');
    }

    public function submitApplication(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'nullable|date',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string',
            'program_type' => 'required|string',
            'education_level' => 'nullable|string',
            'institution' => 'nullable|string',
            'graduation_year' => 'nullable|integer',
            'job_title' => 'nullable|string',
            'company' => 'nullable|string',
            'duration' => 'nullable|string',
            'japanese_level' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        // Create or find candidate
        $candidate = Candidate::firstOrCreate(
            ['email' => $validated['email']],
            [
                'full_name' => $validated['full_name'],
                'phone' => $validated['phone'],
                'date_of_birth' => $validated['date_of_birth'] ?? null,
                'address' => $validated['address'] ?? null,
                'status' => 'new',
            ]
        );

        // Create application with reference
        $referenceNo = 'KO-' . strtoupper(Str::random(8));
        CandidateApplication::create([
            'candidate_id' => $candidate->id,
            'program_type' => $validated['program_type'],
            'status' => 'pending',
        ]);

        if (!empty($validated['education_level'])) {
            CandidateEducation::create([
                'candidate_id' => $candidate->id,
                'degree' => $validated['education_level'],
                'institution' => $validated['institution'] ?? 'N/A',
                'graduation_year' => $validated['graduation_year'] ?? date('Y'),
            ]);
        }

        if (!empty($validated['job_title'])) {
            CandidateExperience::create([
                'candidate_id' => $candidate->id,
                'job_title' => $validated['job_title'],
                'company' => $validated['company'] ?? 'N/A',
                'duration' => $validated['duration'] ?? 'N/A',
            ]);
        }

        return redirect()->route('apply.success', ['ref' => $referenceNo]);
    }

    public function success(Request $request)
    {
        $ref = $request->query('ref', 'KO-REF12345');
        return view('pages.apply-success', compact('ref'));
    }
}
