<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi
    protected $fillable = [
        'user_id',
        'category_id',  // Tambahkan ini
        'interest_level' // Tambahkan ini (skala 1-10)
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke category (tambahkan ini)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
