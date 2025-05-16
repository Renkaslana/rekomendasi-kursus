<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AhpCriteriaComparison extends Model
{
    use HasFactory;

    protected $fillable = ['criteria_id_1', 'criteria_id_2', 'value'];

    public function criteriaOne(): BelongsTo
    {
        return $this->belongsTo(AhpCriterion::class, 'criteria_id_1');
    }

    public function criteriaTwo(): BelongsTo
    {
        return $this->belongsTo(AhpCriterion::class, 'criteria_id_2');
    }
}
