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


Route::get('/', 'PagesController@home');
Route::get('/mempelai', 'PagesController@mempelai');
Route::get('/acara', 'PagesController@acara');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/lokasi', 'PagesController@lokasi');
Route::get('/ucapan', 'PagesController@ucapan');
Route::post('/ucapan', 'PagesController@create');
