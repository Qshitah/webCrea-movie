<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'release_date', 'type', 'rating', 'poster_url',
        'age_rating', 'video_quality', 'director', 'status', 'country',
        'premiere_season', 'duration',
    ];
    

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'anime_genre', 'anime_id', 'genre_id');
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'anime_tag', 'anime_id', 'tag_id');
    }

    public function seasons()
    {
        return $this->hasMany(Season::class)->whereHas('anime', function ($query) {
            $query->where('type', 'Series');
        });
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class,'anime_language','anime_id','language_id');
    }

    public function subtitles()
    {
        return $this->belongsToMany(Subtitle::class,'anime_subtitle','anime_id','subtitle_id');
    }
}
