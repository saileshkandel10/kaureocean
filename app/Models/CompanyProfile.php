<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class CompanyProfile extends Model
{
    protected $fillable = ['company_name', 'license_number', 'phone', 'email', 'website', 'address', 'office_hours', 'background', 'vision', 'mission'];
}
