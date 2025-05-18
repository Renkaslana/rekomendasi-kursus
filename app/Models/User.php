<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Pilih salah satu dari dua dibawah ini:

    // Opsi 1 (Dengan Type-Hint - Lebih Baik)
    public function interests(): HasMany
    {
        return $this->hasMany(UserInterest::class);
    }
    public function abilities(): HasMany
    {
        return $this->hasMany(UserAbility::class);
    }

    public function careerGoals(): HasMany
    {
        return $this->hasMany(UserCareerGoal::class);
    }

    public function courseHistory(): HasMany
    {
        return $this->hasMany(UserCourseHistory::class);
    }
}
