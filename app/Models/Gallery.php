<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = 'galleries';

    public $fillable = ['name', 'image', 'description', 'category', 'status'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public function scopeEkstra(Builder $query): Builder
    {
        return $query->where('category', 'Ekstrakulikuler');
    }
    public function scopeEvent(Builder $query): Builder
    {
        return $query->where('category', 'Event');
    }
    public function scopeAkademik(Builder $query): Builder
    {
        return $query->where('category', 'Akademik');
    }
}
