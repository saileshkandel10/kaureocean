<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidateApplication;
use App\Models\TrainingProgram;
use App\Models\ContactMessage;
use App\Models\Statistic;
use App\Models\BlogPost;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCandidates = Candidate::count();
        $newApplications = CandidateApplication::where('status', 'pending')->count();
        $registeredCandidates = Candidate::where('status', 'new')->count();
        $inTraining = Candidate::where('status', 'in_training')->count();
        $interviewReady = Candidate::where('status', 'interview_ready')->count();
        $selected = Candidate::where('status', 'selected')->count();
        $inDocs = Candidate::where('status', 'visa_processing')->count();
        $completed = Candidate::where('status', 'deployed')->count();
        $totalPrograms = TrainingProgram::count();
        $totalEnquiries = ContactMessage::count();

        $recentApplications = CandidateApplication::with('candidate')->latest()->take(5)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();
        $statistics = Statistic::all();

        return view('admin.dashboard.index', compact(
            'totalCandidates', 'newApplications', 'registeredCandidates', 'inTraining',
            'interviewReady', 'selected', 'inDocs', 'completed', 'totalPrograms', 'totalEnquiries',
            'recentApplications', 'recentMessages', 'statistics'
        ));
    }
}
