<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Program extends Model
{
    protected $fillable = ['program_category_id', 'title', 'slug', 'overview', 'eligibility', 'requirements'];
    public function category() { return $this->belongsTo(ProgramCategory::class, 'program_category_id'); }
    public function requirementsList() { return $this->hasMany(ProgramRequirement::class); }
    public function documents() { return $this->hasMany(ProgramDocument::class); }
    public function faqs() { return $this->hasMany(ProgramFaq::class); }
}
