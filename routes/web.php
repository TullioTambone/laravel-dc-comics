<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\comicsController as comicsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $title = 'home';
    $comicsArray = config('comics');

    return view('pages.home', compact('title', 'comicsArray'));
})->name('home');
