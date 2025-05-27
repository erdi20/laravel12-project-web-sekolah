<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $table = 'schools';

    public $fillable = [
        'name',
        'tagline',
        'description',
        'address',
        'email',
        'phone',
        'whatsapp',
        'instagram',
        'facebook',
        'youtube',
        'logo',
        'favicon',
    ];
}
