<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Services\ArtistService;
use App\Models\Album;

class AlbumForm extends Component
{
    public $album;
    public $artist;
    public $artists;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $id=0, int $artist=0)
    {
        $this->artists = ArtistService::getList(false);
        $this->album = Album::find($id);
        $this->artist = $album->id_artist ?? $artist;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.album-form');
    }
}
