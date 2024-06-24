<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'anime_id', 'user_id', 'rating', 'review_text', 'review_date',
    ];

    protected $casts = [
        'review_date' => 'datetime',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
