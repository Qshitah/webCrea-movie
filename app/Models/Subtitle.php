<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
    ];

    public function animes()
    {
        return $this->belongsToMany(Anime::class, 'anime_subtitle', 'subtitle_id', 'anime_id');
    }
}
