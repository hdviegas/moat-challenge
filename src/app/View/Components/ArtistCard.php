<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArtistCard extends Component
{
    public $id;
    public $name;
    public $twitter;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $twitter, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->twitter = $twitter;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.artist-card');
    }
}
