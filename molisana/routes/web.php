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

/*Milestone 2. Nella stessa repo di ieri, continuate l'esercizio della molisana, visualizzando i prodotti suddivisi per tipo (lunga, corta e cortissima).
Vi mando il link di esempio da cui prendere spunto:
https://www.lamolisana.it/le-classiche/Ogni pagina deve mostrare le caratteristiche di ciascun prodotto.
Ecco il link di esempio da cui prendere spunto:
https://www.lamolisana.it/pasta/n-1-spaghetto-quadrato-classiche/Realizzate anche la classe active.*/


Route::get('/', function () {
    return view('home');
})->name('route-home');



Route::get('/news', function () {
    return view('news');
})->name('route-informazioni');



Route::get('/prodotti', function () {
    $pasta = config('pasta');
    //dd($pasta);

    $pasta_lunga = array_filter($pasta, function($element) {
        //dump($element);
        return $element['tipo'] == 'lunga';
    });
    //dd($pasta_lunga); it worked

    $pasta_corta = array_filter($pasta, function($element) {
        //dump($element);
        return $element['tipo'] == 'corta';
    });
    
    $pasta_cortissima = array_filter($pasta, function($element) {
        //dump($element);
        return $element['tipo'] == 'cortissima';
    });

    //$data = ['formatiPasta' => $pasta]; vecchio
    $data = ['formatiPasta' => [
        'pasta Lunga' => $pasta_lunga,
        'pasta Corta' => $pasta_corta,
        'pasta Cortissima' => $pasta_cortissima
        ]
    ];


    //dd($data); imported data correctly
    return view('products',$data);
})->name('route-prodotti');




Route::get('/dettagli/{indice}', function ($indice) {
    $pasta = config('pasta');

    if(is_numeric($indice) && $indice >= 0 && $indice < count($pasta) ){
        $prodotto = $pasta[$indice];
        $data = ['prodotti' => $prodotto];
    } else{
        abort('404');
    }
    
    
    //return 'ciao'.$indice;
    return view('details',$data);
})->name('route-details');
