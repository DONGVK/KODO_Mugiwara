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

Route::get('/test', [

    'as' => 'test.index',

    'uses' => 'ConnexionController@index',

]);

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
