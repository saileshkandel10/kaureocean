<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    protected $fillable = ['course_category_id', 'title', 'slug', 'level', 'duration', 'description', 'fees'];
    public function category() { return $this->belongsTo(CourseCategory::class, 'course_category_id'); }
    public function modules() { return $this->hasMany(CourseModule::class); }
}
