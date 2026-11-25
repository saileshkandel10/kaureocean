<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TrainingSchedule extends Model
{
    protected $fillable = ['training_program_id', 'batch_name', 'start_date', 'timing', 'capacity'];
    public function program() { return $this->belongsTo(TrainingProgram::class, 'training_program_id'); }
}
