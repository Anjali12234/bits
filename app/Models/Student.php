<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Storage;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes, Sluggable, Notifiable;

    protected $fillable = [
        'name',
        'status',
        'email',
        'password',
        'slug',
        'course',
        'position',
        'phone_number',
        'address',
        'registration_no',
        'guardian_name',
        'image',
        'remember_token',
        'is_registered'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
         'course' => 'array'
    ];

    public function setPasswordAttribute($value): void
    {
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
  
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('student', 'public') : null,
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

        static::creating(function ($student) {
            $student->position = static::max('position') + 1;
        });
    }
    public function courses():HasMany
    {
        return $this->hasMany(Course::class);
    }
    public function studentDetail(): HasOne
    {
        return $this->hasOne(StudentDetail::class);
    }
}
