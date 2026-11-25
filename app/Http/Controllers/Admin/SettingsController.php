<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\User;
use App\Models\CandidateApplication;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function companyProfile()
    {
        $profile = CompanyProfile::first();
        return view('admin.system.company-profile', compact('profile'));
    }

    public function updateCompanyProfile(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'license_number' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'office_hours' => 'required|string|max:255',
        ]);

        $profile = CompanyProfile::first();
        if ($profile) {
            $profile->update($validated);
        } else {
            CompanyProfile::create($validated);
        }

        return back()->with('success', 'Company profile updated successfully.');
    }

    public function applicationsIndex()
    {
        $applications = CandidateApplication::with('candidate')->latest()->paginate(15);
        return view('admin.candidates.applications', compact('applications'));
    }

    public function usersIndex()
    {
        $users = User::latest()->paginate(10);
        return view('admin.system.users', compact('users'));
    }
}
