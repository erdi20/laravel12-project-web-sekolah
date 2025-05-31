<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public $fillable = [
        'name',
        'slug'
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
