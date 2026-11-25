<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Candidate extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'full_name', 'email', 'phone', 'date_of_birth', 'address', 'status'];
    public function user() { return $this->belongsTo(User::class); }
    public function applications() { return $this->hasMany(CandidateApplication::class); }
    public function educations() { return $this->hasMany(CandidateEducation::class); }
    public function experiences() { return $this->hasMany(CandidateExperience::class); }
    public function notes() { return $this->hasMany(CandidateNote::class); }
    public function activities() { return $this->hasMany(CandidateActivity::class); }
    public function assignments() { return $this->hasMany(CandidateAssignment::class); }
    public function statusHistories() { return $this->hasMany(CandidateStatusHistory::class); }
    public function documents() { return $this->hasMany(CandidateDocument::class); }
    public function followUps() { return $this->hasMany(FollowUp::class); }
}
