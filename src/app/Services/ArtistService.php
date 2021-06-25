<?php

namespace App\Services;

use App\Services\External\MoatApi;
use App\Services\External\TwitterApi;
use Illuminate\Support\Facades\Http;
use App\Models\Artist;

class ArtistService
{
    public static function getList(bool $withImages = true) : array
    {
        $data = MoatApi::getArtistsList();
        $artists = [];
        foreach ($data as $row) {
            $artist = $row[0];
            $imageUrl = $withImages ? self::getImageUrl($artist['twitter']) : '';
            $artists[] = new Artist($artist['id'], $artist['name'], $artist['twitter'], $imageUrl);
        }
        return $artists;
    }

    public static function getArtist(int $id, bool $withImages = true) : Artist
    {
        $data = MoatApi::getArtist($id);
        $row = $data[0];
        $imageUrl = $withImages ? self::getImageUrl($row['twitter']) : '';
        $artist = new Artist($row['id'], $row['name'], $row['twitter'], $imageUrl);
        return $artist;
    }

    public static function getImageUrl(string $name) : string
    {
        $data = TwitterApi::getArtistImageUrl($name);
        return str_replace('_normal', '', $data['profile_image_url']);
    }
}
