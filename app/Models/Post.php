<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';
    public $id = 'id';

    public $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'image',
        'category_id',
        'user_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }
    
}
