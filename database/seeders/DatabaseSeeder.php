<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Roles & Permissions
        $adminRole = DB::table('roles')->insertGetId([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Full administrative access to the system',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $counselorRole = DB::table('roles')->insertGetId([
            'name' => 'Counselor',
            'slug' => 'counselor',
            'description' => 'Candidate management and enquiry access',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Initial Admin User
        $adminUser = User::create([
            'name' => 'Kaure Ocean Admin',
            'email' => env('ADMIN_EMAIL', 'admin@koceaneducationconsultancy.com.np'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'KaureAdmin@2026!')),
            'role' => 'admin',
        ]);

        DB::table('role_user')->insert([
            'role_id' => $adminRole,
            'user_id' => $adminUser->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Company Profile
        DB::table('company_profiles')->insert([
            'company_name' => 'Kaure Ocean Educational & Consultancy Pvt. Ltd.',
            'license_number' => '221/082/083',
            'phone' => '01-5923201',
            'email' => 'kaureocean7@gmail.com',
            'website' => 'www.koceaneducationconsultancy.com.np',
            'address' => 'Kathmandu-26, Samakhusi, Ranibari Marga, Nepal',
            'office_hours' => '9:00 AM - 5:30 PM (Nepal Time)',
            'background' => 'Kaure Ocean Educational & Consultancy Pvt. Ltd. (Kaure Ocean Japanese Language School) is based in Samakhusi, Kathmandu, Nepal.',
            'vision' => 'To become a trusted and leading manpower recruitment company, recognized for delivering skilled, disciplined, and well-trained workforce to the global market, especially Japan.',
            'mission' => 'We are committed to transforming lives by connecting talented individuals with meaningful opportunities, while upholding dignity, fairness, and respect.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4. Statistics (Draft-verified)
        $stats = [
            ['metric_key' => 'candidates_trained', 'metric_value' => '1000+', 'label' => 'Candidates Trained Successfully', 'is_verified' => true],
            ['metric_key' => 'success_rate', 'metric_value' => '90%+', 'label' => 'Success Rate in Job Placement', 'is_verified' => true],
            ['metric_key' => 'pre_departure', 'metric_value' => '100%', 'label' => 'Pre-Departure Training', 'is_verified' => true],
            ['metric_key' => 'countries_served', 'metric_value' => '5+', 'label' => 'Countries Served', 'is_verified' => true],
            ['metric_key' => 'candidates_employed', 'metric_value' => '5000+', 'label' => 'Candidates Employed', 'is_verified' => false],
            ['metric_key' => 'trusted_clients', 'metric_value' => '100+', 'label' => 'Trusted Clients Worldwide', 'is_verified' => false],
            ['metric_key' => 'client_satisfaction', 'metric_value' => '95%+', 'label' => 'Client Satisfaction', 'is_verified' => false],
        ];

        foreach ($stats as $stat) {
            DB::table('statistics')->insert(array_merge($stat, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // 5. Training Categories
        $langCatId = DB::table('training_categories')->insertGetId([
            'name' => 'Japanese Language Education',
            'slug' => 'japanese-language-education',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $techCatId = DB::table('training_categories')->insertGetId([
            'name' => 'Technical Skill Training',
            'slug' => 'technical-skill-training',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 6. Program Categories (SSW, TITP)
        $sswCatId = DB::table('program_categories')->insertGetId([
            'name' => 'Specified Skilled Worker (SSW)',
            'slug' => 'specified-skilled-worker-ssw',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $titpCatId = DB::table('program_categories')->insertGetId([
            'name' => 'Technical Intern Training Program (TITP)',
            'slug' => 'technical-intern-training-program-titp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 7. Leadership Profile
        DB::table('leadership_profiles')->insert([
            'name' => 'Prakash Bastra (Prakash Bastola)',
            'designation' => 'Managing Director / CEO',
            'image_path' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80',
            'message' => 'Following my studies and professional work experience in Japan, I built my career across international stages including the United States and Canada. Deeply understanding global labor standards and professional expectations, I returned to Nepal to establish Kaure Ocean Japanese Language School as a bridge connecting Nepal and Japan.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
