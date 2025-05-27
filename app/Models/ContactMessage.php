<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    public $table = 'contact_messages';

    public $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'replied',
    ];
}
