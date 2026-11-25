<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOpportunity extends Model
{
    protected $fillable = ['employer_id', 'title', 'industry', 'country', 'program_type', 'job_description', 'required_skills', 'japanese_level_required', 'salary', 'vacancies', 'application_deadline', 'status'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
