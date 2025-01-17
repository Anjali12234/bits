<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'image',
        'name',
        'post',
        'experience',
        'phone',
        'email',
        'address',
        'fax',
        'portfolio_url',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'youtube_url',
        'description',
        'slug',
        'position',
    ];
    
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('teams', 'public') : null,
        );
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($team) {
            $team->position = static::max('position') + 1;
        });
    }
}
