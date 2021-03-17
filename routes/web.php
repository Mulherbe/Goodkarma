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

Route::get('/', function () {
    return view('accueil');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/description', function () {
    return view('description');
});

Route::get('/galerie', function () {
    return view('galerie');
});

Route::get('/guadeloupe', function () {
    return view('guadeloupe');
});

Route::get('/carte', function () {
    return view('carte');
});

Route::get('/disponibilite', function () {
    return view('disponibilite');
});

Route::get('/commentaire', function () {
    return view('commentaire');
});
Route::get('/contact', function () {
    return view('contact');
});
