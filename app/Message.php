<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $casts = [
        'me' => 'boolean'
    ];
}
