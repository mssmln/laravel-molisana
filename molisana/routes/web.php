<?php

use Illuminate\Support\Facades\Route;

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


/*Riprodurre 3 pagine del sito sulla molisana: home, products e news.
Le news e la home potete farle a piacere, mentre per i products guardate lo screenshot in allegato.Utilizzate i layouts, così come visti a lezione.*/


Route::get('/', function () {
    return view('home');
})->name('route-home');

Route::get('/news', function () {
    return view('news');
})->name('route-informazioni');

Route::get('/prodotti', function () {
    return view('products');
})->name('route-prodotti');
