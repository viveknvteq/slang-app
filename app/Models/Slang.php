<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slang extends Model
{
    protected $fillable = [
        'user_id',
        'word',
        'meaning',
        'example',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
