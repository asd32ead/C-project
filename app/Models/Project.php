<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'address',
        'type',
        'image',
        'gallery',
        'status',
        'featured'
    ];

    protected $casts = [
        'gallery' => 'array',
        'featured' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
        
        static::updating(function ($project) {
            if ($project->isDirty('title')) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}