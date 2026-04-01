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

Route::get('/assurance-decennale-resilie-non-paiement', function () {

    return view('layout.resilie');
});

Route::get('/assurance-decennale-reprise-du-passe', function () {

    return view('layout.reprise');
});
Route::get('/assurance-decennale-plombier', function () {

    return view('layout.plombier');
});

Route::get('/assurance-decennale-macon', function () {

    return view('layout.maçon');
});
Route::get('/assurance-decennale-electricien', function () {

    return view('layout.electricien');
});

Route::get('/prix-assurance-decennale-auto-entrepreneur', function () {

    return view('layout.entrepreneur');
});

 
Route::post('/', 'App\Http\Controllers\HomeController@store');
Route::post('/prix-assurance-decennale-auto-entrepreneur', 'App\Http\Controllers\HomeController@entrepreneur');
Route::post('/assurance-decennale-macon', 'App\Http\Controllers\HomeController@macon');
Route::post('/assurance-decennale-electricien', 'App\Http\Controllers\HomeController@electricien');
Route::post('/assurance-decennale-resilie-non-paiement', 'App\Http\Controllers\HomeController@resilie');
Route::post('/assurance-decennale-reprise-du-passe', 'App\Http\Controllers\HomeController@reprise');



// Route::get('/sitemap.xml', function () {
//     $urls = [
//         ['loc' => 'https://lassurance-garantie-decennale.fr/', 'priority' => '1.00'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/auto-entrepreneur', 'priority' => '0.80'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/assurance-decennale-electricien', 'priority' => '0.80'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/macon-grosoeuvres', 'priority' => '0.80'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/resilie-nonpaiement', 'priority' => '0.80'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/reprise-du-passe-assurance-decennale', 'priority' => '0.80'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/mention-legale', 'priority' => '0.80'],
//         ['loc' => 'https://lassurance-garantie-decennale.fr/politique-legale', 'priority' => '0.80'],
//     ];

//     $content = view('sitemap', ['urls' => $urls])->render();
    
//     return response($content)
//         ->header('Content-Type', 'application/xml');
// });