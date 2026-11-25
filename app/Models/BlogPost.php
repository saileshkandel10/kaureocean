<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BlogPost extends Model
{
    use SoftDeletes;
    protected $fillable = ['blog_category_id', 'user_id', 'title', 'slug', 'content', 'featured_image', 'meta_title', 'meta_description', 'published_at'];
    public function category() { return $this->belongsTo(BlogCategory::class, 'blog_category_id'); }
    public function author() { return $this->belongsTo(User::class, 'user_id'); }
    public function tags() { return $this->belongsToMany(BlogTag::class, 'blog_post_tag'); }
}
