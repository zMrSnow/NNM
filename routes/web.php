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

Route::get('/', "FrontEndController@home")->name("front.home");
Route::get('/nekonomagic', "FrontEndController@home")->name("front.home");
Route::get('/anime', "FrontEndController@anime")->name("front.anime");

Route::get('/anime/{id}', 'AnimeController@show')->name('anime.show');

// register
Route::post('/auth/register', 'CustomAuthController@postRegister')->name('auth.register');
// login
Route::post('/auth/login', 'CustomAuthController@postLogin')->name('auth.login');
// logout
Route::get('/auth/logout', 'CustomAuthController@logOut')->name('auth.logout');




