<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;

class ExportController extends Controller
{
    public function exportCandidatesCsv()
    {
        $filename = 'kaure-ocean-candidates-' . date('Y-m-d') . '.csv';
        $candidates = Candidate::all();

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($candidates) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['ID', 'Full Name', 'Email', 'Phone', 'Status', 'Registration Date']);

            foreach ($candidates as $cand) {
                fputcsv($file, [
                    $cand->id,
                    $cand->full_name,
                    $cand->email,
                    $cand->phone,
                    $cand->status,
                    $cand->created_at,
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
