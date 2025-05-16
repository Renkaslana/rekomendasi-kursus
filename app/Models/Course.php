<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'instructor',
        'duration_hours',
        'price',
        'difficulty_level',
        'image_url',
        'course_url',
        'keywords'
    ];

    protected $casts = [
        'keywords' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function userCourseHistory(): HasMany
    {
        return $this->hasMany(UserCourseHistory::class);
    }

    public function criteriaValues(): HasMany
    {
        return $this->hasMany(CourseCriteriaValue::class);
    }
}
