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
})->middleware('guest');

Auth::routes();


Route::get('/home', 'HomePage@index')->middleware('auth');
Route::post('/update-profil', 'Profil@update')->middleware('auth');
Route::get('/upload_song', 'Song@upload')->middleware('auth');
Route::post('/create-song', 'Song@create')->middleware('auth');
Route::get('/delete-song/{id}', 'Song@delete')->middleware('auth')->where('id', '[0-9]+');
Route::get('/user/{id}', 'HomePage@user')->middleware('auth')->where('id', '[0-9]+');
Route::get('/suivre/{id}', 'HomePage@suivre')->middleware('auth')->where('id', '[0-9]+');
Route::get('/recherche/{search}', 'HomePage@recherche')->middleware('auth');
Route::get('/abonnements', 'HomePage@abonnements')->middleware('auth');
