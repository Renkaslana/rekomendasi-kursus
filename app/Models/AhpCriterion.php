<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AhpCriterion extends Model
{
    use HasFactory;

    protected $table = 'ahp_criteria';

    protected $fillable = ['name', 'description', 'weight'];

    public function courseCriteriaValues(): HasMany
    {
        return $this->hasMany(CourseCriteriaValue::class, 'criteria_id');
    }
}
