<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Services\ArtistService;
use App\Http\Requests\AlbumRequest;

class AlbumController extends Controller
{
    public function index($artistId)
    {
        $albums = Album::artist($artistId)->get();
        $artist = ArtistService::getArtist($artistId);
        return view('albums', ['action'=> 'view', 'albums'=>$albums, 'artist'=>$artist]);
    }

    public function edit($artistId, $albumId)
    {
        return view('albums', ['action'=> 'edit', 'albumId'=>$albumId, 'artistId'=> $artistId]);
    }

    public function create($artistId)
    {
        return view('albums', ['action'=> 'create', 'artistId'=>$artistId]);
    }

    public function insert(AlbumRequest $request)
    {
        $data = $request->validated();
        $insert = Album::create($data);
        return $insert ? redirect()->route('albums', [$insert->id_artist]) : back()->withInput()->withErrors('Unable to insert data');
    }
    
    public function update(AlbumRequest $request)
    {
        $data = $request->validated();
        $album = Album::find($data['id']);
        $update = $album->update($data);
        return $update ? redirect()->route('albums', [$album->id_artist]) : back()->withInput()->withErrors('Unable to update data');
    }

    public function delete(Request $request)
    {
        $data = $request->validate([
            'id' => ['required']
        ]);
        $album = Album::find((int) $data['id']);
        $artistId = $album->id_artist;
        $delete = $album->delete();
        return $delete ? redirect()->route('albums', [$artistId]) : redirect()->route('albums', [$artistId])->withErrors('Unable to delete data');
    }
}
