<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['company_name', 'country', 'industry', 'address', 'website', 'contact_person', 'phone', 'email', 'partnership_status', 'notes'];

    public function jobOpportunities()
    {
        return $this->hasMany(JobOpportunity::class);
    }
}
