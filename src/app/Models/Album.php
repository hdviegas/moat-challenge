<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'year', 'id_artist'];
    use HasFactory;

    public function scopeArtist($query, $artist)
    {
        return $query->where("id_artist", $artist);
    }
}
