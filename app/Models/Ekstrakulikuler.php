<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    public $table = 'ekstrakulikulers';

    public $fillable = [
        'name',
        'description',
        'image'
    ];
}
