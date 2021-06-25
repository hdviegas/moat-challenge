<?php

namespace App\Services\External;

use Illuminate\Support\Facades\Http;

class MoatAPI
{
    public static function getArtistsList()
    {
        $response = Http::withHeaders(['Basic' => env('MOAT_TOKEN')])->get('https://moat.ai/api/task/');
        if ($response->successful()) {
            return $response->json();
        }
        throw new Exception("Can't reach Moat API");
    }

    public static function getArtist($id)
    {
        $response = Http::withHeaders(['Basic' => env('MOAT_TOKEN')])->get('http://moat.ai/api/task', ['artist_id' => $id]);
        if ($response->successful()) {
            return $response->json();
        }
        throw new Exception("Can't reach Moat API");
    }
}
