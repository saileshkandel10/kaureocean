<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Testimonial extends Model
{
    protected $fillable = ['candidate_name', 'program', 'destination', 'quote', 'image_path', 'is_verified'];
    protected $casts = ['is_verified' => 'boolean'];
    public function scopeVerified($query) { return $query->where('is_verified', true); }
}
