<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Services\ArtistService;


use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $artists = ArtistService::getList();
        
        return view('artists', ['artists'=>$artists]);
    }
}
