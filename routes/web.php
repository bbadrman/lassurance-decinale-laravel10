<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');


Route::get('/reponse', function () {

    return view('layout.response');
});


Route::get('/politique-legale', function () {

    return view('layout.politique');
});

Route::get('/mention-legale', function () {

    return view('layout.mention');
});

Route::get('/resilie-nonpaiement', function () {

    return view('layout.resilie');
});

Route::get('/reprise-du-passe-assurance-decennale', function () {

    return view('layout.reprise');
});
Route::get('/assurance-decennale-plombier', function () {

    return view('layout.plombier');
});

Route::get('/maçon-grosœuvres', function () {

    return view('layout.maçon');
});
Route::get('/assurance-decennale-electricien', function () {

    return view('layout.electricien');
});

Route::get('/auto-entrepreneur', function () {

    return view('layout.entrepreneur');
});

Route::get('/resilie-nonp', function () {

    return view('layout.nopaiement');
});

Route::post('/', 'App\Http\Controllers\HomeController@store');
Route::post('/auto-entrepreneur', 'App\Http\Controllers\HomeController@entrepreneur');
Route::post('/macon-grosœuvres', 'App\Http\Controllers\HomeController@macon');
Route::post('/assurance-decennale-electricien', 'App\Http\Controllers\HomeController@electricien');
Route::post('/resilie-nonpaiement', 'App\Http\Controllers\HomeController@resilie');
Route::post('/reprise-du-passe-assurance-decennale', 'App\Http\Controllers\HomeController@reprise');
