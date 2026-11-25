<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProgramCategory extends Model
{
    protected $fillable = ['name', 'slug'];
    public function programs() { return $this->hasMany(Program::class); }
}
