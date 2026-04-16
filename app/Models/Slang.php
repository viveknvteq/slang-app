<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ ADD THIS
use Illuminate\Database\Eloquent\Model;

class Slang extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'word',
        'slug',
        'meaning',
        'example',
        'status',
        'entry_hash', // Add this
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // App\Models\Slang.php
    public function scopeActive($query)
    {
        return $query->where('status', 'approved');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Generate slug from word if not set
            if (empty($model->slug)) {
                $model->slug = \Illuminate\Support\Str::slug($model->word);
            }

            $model->entry_hash = md5(
                strtolower(
                    trim($model->word.'|'.$model->meaning.'|'.$model->example)
                )
            );

        });
    }
}
