<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TrainingEnrollment extends Model
{
    protected $fillable = ['training_program_id', 'full_name', 'email', 'phone', 'status'];
    public function program() { return $this->belongsTo(TrainingProgram::class, 'training_program_id'); }
}
