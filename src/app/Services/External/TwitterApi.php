<?php

namespace App\Services\External;

use Illuminate\Support\Facades\Http;

class TwitterAPI
{
    public static function getArtistImageUrl($name)
    {
        $response = Http::withToken(env('TWITTER_TOKEN'))->get('https://api.twitter.com/1.1/users/show.json', ['screen_name'=>$name]);
        if ($response->successful()) {
            return $response->json();
        }
        throw new Exception("Can't reach Twitter");
    }
}
