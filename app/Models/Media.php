<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'type',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($media) {
            $media->slug = Str::slug($media->title);
        });
        
        static::updating(function ($media) {
            if ($media->isDirty('title')) {
                $media->slug = Str::slug($media->title);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}