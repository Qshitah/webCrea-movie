<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'anime_id', 'season_number', 'title', 'release_date',
    ];

   
    public function anime()
    {
        return $this->belongsTo(Anime::class)->where('type', 'Series');
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
