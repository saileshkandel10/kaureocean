<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrainingProgram;
use App\Models\Employer;
use App\Models\JobOpportunity;
use App\Models\Candidate;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function trainingIndex()
    {
        $programs = TrainingProgram::with('category')->latest()->paginate(10);
        return view('admin.operations.training', compact('programs'));
    }

    public function sswIndex()
    {
        $opportunities = JobOpportunity::where('program_type', 'SSW')->with('employer')->latest()->paginate(10);
        return view('admin.operations.ssw', compact('opportunities'));
    }

    public function titpIndex()
    {
        $opportunities = JobOpportunity::where('program_type', 'TITP')->with('employer')->latest()->paginate(10);
        return view('admin.operations.titp', compact('opportunities'));
    }

    public function employersIndex()
    {
        $employers = Employer::latest()->paginate(10);
        return view('admin.operations.employers', compact('employers'));
    }

    public function employerStore(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'country' => 'required|string|max:100',
            'contact_person' => 'nullable|string|max:255',
            'email' => 'nullable|email',
        ]);

        Employer::create($validated);
        return back()->with('success', 'Employer added successfully.');
    }

    public function matchingIndex()
    {
        $candidates = Candidate::all();
        $jobs = JobOpportunity::where('status', 'open')->with('employer')->get();
        return view('admin.operations.matching', compact('candidates', 'jobs'));
    }
}
