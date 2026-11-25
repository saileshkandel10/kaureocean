<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Statistic extends Model
{
    protected $table = 'statistics';
    protected $fillable = ['metric_key', 'metric_value', 'label', 'is_verified', 'is_active'];
    protected $casts = ['is_verified' => 'boolean', 'is_active' => 'boolean'];
    public function scopeVerified($query) { return $query->where('is_verified', true); }
    public function scopeActive($query) { return $query->where('is_active', true); }
}
