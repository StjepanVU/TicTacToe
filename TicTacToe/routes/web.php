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


/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Auth::routes();


// Profile route
Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@show');

// Create game, store game object
Route::get('/game/create', 'App\Http\Controllers\GamesController@create');
Route::post('/game', 'App\Http\Controllers\GamesController@store');

// Games log
Route::get('/','App\Http\Controllers\GamesController@index');

// Game
Route::get('/game/{game}','App\Http\Controllers\GamesController@show');

// Search
Route::get('/search','App\Http\Controllers\GamesController@search');




