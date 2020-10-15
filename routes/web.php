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

Route::get('/', 'GameController@index')->name('index');

Route::get('/game/{name}', 'GameController@game')->name('game');

Route::get('/end-game', 'GameController@endGame')->name('end-game');

Route::get('/game-start', 'GameController@store')->name('start-game');