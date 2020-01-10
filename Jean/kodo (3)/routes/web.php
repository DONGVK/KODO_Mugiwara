<?php

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
    return view('welcome');
});
/* ----- --------------HOME----------------------- */
/*Route::get('/accueil', function() {
  return view('view_home');
});*/

Route::get('/accueil', 'ConnexionController@accueil');

Route::get('/profil', 'ConnexionController@profil');

/* ----- --------------INSCRIPTION----------------------- */
Route::get('/inscriptionn', function(){
  return view('view_connexion');
});

Route::get('/inscriptiona', [

    'as' => 'test.index',

    'uses' => 'InscriptionController@inscriptiona',

]);

Route::get('/inscriptions', [

    'as' => 'test.index',

    'uses' => 'InscriptionController@inscriptions',

]);

Route::get('/inscriptiono', [

    'as' => 'test.index',

    'uses' => 'InscriptionController@inscriptiono',

]);

Route::post('/inscription', [

    'as' => 'test.index',

    'uses' => 'InscriptionController@istore',

]);

/* ----- --------------CONNEXION----------------------- */
Route::get('/connexion','ConnexionController@index');

Route::post('/connexioni',[

    'as' => 'test.index',

    'uses' => 'ConnexionController@connexion',

]);

Auth::routes();

Route::post('/home', 'HomeController@index')->name('home');

/* ---------------- DECONNEXION -----------------------------*/
Route::get('deconnexion', function() {
  return view('view_deconnexion');
});
