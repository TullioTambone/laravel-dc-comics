<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class comicsController extends Controller
{
    public function getComics(){
        $title = 'home';
        $comicsArray = config('comics');
    
        return view('pages.home', compact('title', 'comicsArray'));
    }
}
