<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Faq;
use App\Models\Statistic;
use App\Models\Banner;
use App\Models\BlogPost;
use App\Models\Media;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    // Services CRUD
    public function servicesIndex()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.content.services.index', compact('services'));
    }

    public function serviceStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
        ]);

        $validated['slug'] = \Str::slug($validated['title']);
        Service::create($validated);
        return back()->with('success', 'Service added successfully.');
    }

    // Testimonials CRUD
    public function testimonialsIndex()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.content.testimonials.index', compact('testimonials'));
    }

    public function testimonialStore(Request $request)
    {
        $validated = $request->validate([
            'candidate_name' => 'required|string|max:255',
            'program' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'quote' => 'required|string',
        ]);

        Testimonial::create($validated);
        return back()->with('success', 'Testimonial added successfully.');
    }

    // Partners CRUD
    public function partnersIndex()
    {
        $partners = Partner::latest()->paginate(10);
        return view('admin.content.partners.index', compact('partners'));
    }

    public function partnerStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'website_url' => 'nullable|url',
        ]);
        $validated['logo_path'] = 'assets/logos/default-partner.png';

        Partner::create($validated);
        return back()->with('success', 'Partner added successfully.');
    }

    // Statistics Management
    public function statisticsIndex()
    {
        $statistics = Statistic::all();
        return view('admin.content.statistics.index', compact('statistics'));
    }

    public function statisticUpdate(Request $request, Statistic $statistic)
    {
        $validated = $request->validate([
            'metric_value' => 'required|string|max:50',
            'label' => 'required|string|max:255',
            'is_verified' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $statistic->update([
            'metric_value' => $validated['metric_value'],
            'label' => $validated['label'],
            'is_verified' => $request->boolean('is_verified'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return back()->with('success', 'Statistic updated successfully.');
    }
}
