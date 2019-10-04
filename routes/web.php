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

// Route::get('/', function () {
//     return view('views.content');
// });

Route::get('/','ViewController@index')->name('index');
Route::get('/about','ViewController@about')->name('about');
Route::get('/galleries','ViewController@galleries')->name('galleries');
Route::get('/contact','ViewController@contact')->name('contact');
Route::get('/models','ViewController@models')->name('models');
Route::get('/profile/{slug}','ViewController@profile')->name('profile');


Route::match(['get', 'post'],'auth/login','ViewController@login')->name('login');
Route::match(['get', 'post'],'auth/register','UserController@register')->name('register');
