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

//  Old start>
Route::get('/old/', function () {
    return view('old/home');
});

Route::get('/old/login', function () {
    return view('old/login');
});

Route::get('/old/forbidden', function () {
    return view('old/forbidden');
});

Route::get('/old/signup', function () {
    return view('old/signup');
});

Route::get('/old/aggiungi_piatto', function () {
    return view('old/aggiungi_piatto');
});

Route::get('/old/aggiungi_recensione', function () {
    return view('old/aggiungi_recensione');
});

Route::get('/old/aggiungi_ristorante', function () {
    return view('old/aggiungi_ristorante');
});

Route::get('/old/aggiungi_ristorante_admin', function () {
    return view('old/aggiungi_ristorante_admin');
});

Route::get('/old/elencoaltro', function () {
    return view('old/elencoaltro');
});

Route::get('/old/elencoetnico', function () {
    return view('old/elencoetnico');
});

Route::get('/old/elencokebab', function () {
    return view('old/elencokebab');
});

Route::get('/old/elencopizzeria', function () {
    return view('old/elencopizzeria');
});

Route::get('/old/elencoristoranti', function () {
    return view('old/elencoristoranti');
});

Route::get('/old/elencosushi', function () {
    return view('old/elencosushi');
});

Route::get('/old/elimina_piatto', function () {
    return view('old/elimina_piatto');
});

Route::get('/old/elimina_ristorante', function () {
    return view('old/elimina_ristorante');
});

Route::get('/old/fail', function () {
    return view('old/fail');
});

Route::get('/old/loggedout', function () {
    return view('old/loggedout');
});

Route::get('/old/modifica_piatto', function () {
    return view('old/modifica_piatto');
});

Route::get('/old/modifica_ristorante', function () {
    return view('old/modifica_ristorante');
});

Route::get('/old/pannello_admin', function () {
    return view('old/pannello_admin');
});

Route::get('/old/pannello_ristorante', function () {
    return view('old/pannello_ristorante');
});

Route::get('/old/rispondi', function () {
    return view('old/rispondi');
});

//  <Old end
