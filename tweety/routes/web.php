<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::Post('/tweets','TweetsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Post('/profiles/{user:Username}/follow', 'FollowsController@store');
Route::get('/profiles/{user:Username}/edit', 'ProfilesController@edit');

Route::get('/profiles/{user:Username}', 'ProfilesController@show')->name('profile');
