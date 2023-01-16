<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'content',
        'is_featured',
        'main_image',
        'main_image_type',
        'category_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    public function scopePublished($query)
    {
        return $query
            ->whereNotNull('published_at');
    }

    public function scopeFeatured($query)
    {
        return $query
            ->whereNotNull('published_at')
            ->where('is_featured', true);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
