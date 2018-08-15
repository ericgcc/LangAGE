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
    return view('index');
})->middleware('basicAuth');

Route::post('ratings/store', [
    'uses' => 'RatingController@store',
    'as' => 'ratings.store',
    'middleware' => ['basicAuth'],
    'where' => [],
    'domain' => NULL,
]);