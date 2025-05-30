<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseCriteriaValue extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'criteria_id', 'value'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function criterion(): BelongsTo
    {
        return $this->belongsTo(AhpCriterion::class, 'criteria_id');
    }
}
