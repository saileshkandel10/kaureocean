<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PageSection extends Model
{
    protected $fillable = ['page_id', 'section_key', 'title', 'content', 'image_path', 'order'];
    public function page() { return $this->belongsTo(Page::class); }
}
