<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'galleries';

    public $fillable = ['name', 'image', 'description', 'category'];
}
