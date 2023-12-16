<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
        'categories' => 'array',
        'status' => PostStatus::class,
    ];



    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->categories()->detach();
            $post->tags()->detach();
        });

        static::creating(function ($post) {
            $post->author_id = auth()->id();
            $post->slug = Str::slug($post->title);
            $post->excerpt = Str::limit($post->body, 120);
        });
    }
}
