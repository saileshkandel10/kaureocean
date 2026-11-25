<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CandidateFrontendController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\OperationsController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\SettingsController;

// Public Website Routes
Route::get('/', function () { return view('home'); });
Route::get('/design-preview', function () { return view('design-preview'); });
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/mission-vision', [PageController::class, 'missionVision']);
Route::get('/leadership', [PageController::class, 'leadership']);
Route::get('/our-team', [PageController::class, 'team']);
Route::get('/japanese-language', [PageController::class, 'japaneseLanguage']);
Route::get('/jlpt-preparation', [PageController::class, 'jlptPreparation']);
Route::get('/training', [PageController::class, 'training']);
Route::get('/japan-opportunities/ssw', [PageController::class, 'ssw']);
Route::get('/japan-opportunities/titp', [PageController::class, 'titp']);
Route::get('/recruitment-process', [PageController::class, 'recruitmentProcess']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/blog', [PageController::class, 'blogIndex']);
Route::get('/blog/{slug}', [PageController::class, 'blogShow']);

Route::get('/contact-us', [PageController::class, 'contact']);

// Candidate Application Routes
Route::get('/apply-now', [CandidateFrontendController::class, 'showApplyForm']);
Route::post('/apply-now', [CandidateFrontendController::class, 'submitApplication']);
Route::get('/apply-success', [CandidateFrontendController::class, 'success'])->name('apply.success');

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy']);
Route::get('/terms-and-conditions', [PageController::class, 'terms']);
Route::get('/disclaimer', [PageController::class, 'disclaimer']);

// XML Sitemap Route
Route::get('/sitemap.xml', function() {
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $urls = ['', 'about-us', 'mission-vision', 'leadership', 'our-team', 'japanese-language', 'jlpt-preparation', 'training', 'japan-opportunities/ssw', 'japan-opportunities/titp', 'recruitment-process', 'gallery', 'blog', 'contact-us', 'apply-now'];
    foreach ($urls as $url) {
        $xml .= '<url><loc>' . url($url) . '</loc><changefreq>weekly</changefreq></url>';
    }
    $xml .= '</urlset>';
    return response($xml, 200)->header('Content-Type', 'application/xml');
});

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout']);

// Protected Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('candidates', CandidateController::class);

    // CMS Routes
    Route::get('/cms/services', [CmsController::class, 'servicesIndex']);
    Route::post('/cms/services', [CmsController::class, 'serviceStore']);
    Route::get('/cms/testimonials', [CmsController::class, 'testimonialsIndex']);
    Route::post('/cms/testimonials', [CmsController::class, 'testimonialStore']);
    Route::get('/cms/partners', [CmsController::class, 'partnersIndex']);
    Route::post('/cms/partners', [CmsController::class, 'partnerStore']);
    Route::get('/cms/statistics', [CmsController::class, 'statisticsIndex']);
    Route::put('/cms/statistics/{statistic}', [CmsController::class, 'statisticUpdate']);

    // Operations Routes (Training, SSW, TITP, Employers, Matching)
    Route::get('/operations/training', [OperationsController::class, 'trainingIndex']);
    Route::get('/operations/ssw', [OperationsController::class, 'sswIndex']);
    Route::get('/operations/titp', [OperationsController::class, 'titpIndex']);
    Route::get('/operations/employers', [OperationsController::class, 'employersIndex']);
    Route::post('/operations/employers', [OperationsController::class, 'employerStore']);
    Route::get('/operations/matching', [OperationsController::class, 'matchingIndex']);

    // System Settings & Management
    Route::get('/system/company-profile', [SettingsController::class, 'companyProfile']);
    Route::put('/system/company-profile', [SettingsController::class, 'updateCompanyProfile']);
    Route::get('/system/applications', [SettingsController::class, 'applicationsIndex']);
    Route::get('/system/users', [SettingsController::class, 'usersIndex']);

    // Export Routes
    Route::get('/export/candidates', [ExportController::class, 'exportCandidatesCsv'])->name('export.candidates');
});
