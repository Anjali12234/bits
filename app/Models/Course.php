<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class   Course extends Model
{
    use HasFactory, SoftDeletes, Sluggable, Notifiable;

    protected $fillable = [
        'course_name',
        'duration',
        'start_date',
        'end_date',
        'slug',
        'position',
        'status',
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'course_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->position = static::max('position') + 1;
        });
    }
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
   
}
