<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function userInterests(): HasMany
    {
        return $this->hasMany(UserInterest::class);
    }

    public function userAbilities(): HasMany
    {
        return $this->hasMany(UserAbility::class);
    }
}
