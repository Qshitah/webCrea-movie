<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function anime()
    {
        return $this->belongsToMany(Anime::class, 'anime_tag', 'tag_id', 'anime_id');
    }
}
