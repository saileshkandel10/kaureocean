<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TrainingProgram extends Model
{
    protected $fillable = ['training_category_id', 'title', 'slug', 'introduction', 'objectives', 'learning_outcomes', 'duration'];
    public function category() { return $this->belongsTo(TrainingCategory::class, 'training_category_id'); }
    public function schedules() { return $this->hasMany(TrainingSchedule::class); }
    public function enrollments() { return $this->hasMany(TrainingEnrollment::class); }
}
