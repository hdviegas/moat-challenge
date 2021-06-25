<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Album extends Component
{
    public $album;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($album)
    {
        $this->album = json_decode($album);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.album');
    }
}
