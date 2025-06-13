<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'category',
        'user_id',
        'image',
        'is_published',
        'published_at',
    ];

    protected static function booted()
    {
        static::creating(function ($blog) {
            $blog->slug = $blog->slug ?? Str::slug($blog->title) . '-' . uniqid();
            $blog->excerpt = Str::limit(strip_tags($blog->content), 150);
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title')) {
                $blog->slug = Str::slug($blog->title);
            }
            if ($blog->isDirty('content')) {
                $blog->excerpt = Str::limit(strip_tags($blog->content), 150);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Relations
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
