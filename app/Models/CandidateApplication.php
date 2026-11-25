<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateApplication extends Model
{
    protected $fillable = ['candidate_id', 'program_type', 'status'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
