<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slang extends Model
{
    protected $fillable = [
        'word',
        'meaning',
        'example',
    ];
}
