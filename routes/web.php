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

Route::get('/test', function () {
    return view('views.test');
});

Route::get('/','ViewController@index')->name('index');
Route::get('/about','ViewController@about')->name('about');
Route::get('/models','ViewController@galleries')->name('galleries');
Route::get('/contact','ViewController@contact')->name('contact');
Route::match(['get', 'post'],'contact','ViewController@contact')->name('contact');
// Route::get('/models','ViewController@models')->name('models');
Route::get('/profile/{slug}','ViewController@profile')->name('profile');



Route::match(['get', 'post'],'auth/login','LoginController@login')->name('login');
Route::match(['get', 'post'],'auth/register','UserController@register')->name('register');
Route::match(['get', 'post'],'auth/forget-password','LoginController@forget_password')->name('forget_password');
Route::get('auth/logout','LoginController@logout')->name('logout');


//user route
Route::group(['prefix' => 'user','middleware' => 'user'], function() {
    Route::match(['get', 'post'],'/dashboard','UserDashboardController@dashboard')->name('user.dashboard');
	Route::get('/galleries','UserDashboardController@user_galleries')->name('user.galleries');
});


//login
Route::match(['get', 'post'],'/login/admin','AdminController@login')->name('admin.login');


// admin Route
Route::group(['prefix' => 'admin','middleware' => 'admin'], function() {
    Route::get('all-admins','AdminDashboardController@all_admins')->name('all_admins');
    Route::get('dashboard','AdminDashboardController@index')->name('admin.dashboard');
    Route::get('/contact','AdminDashboardController@contact')->name('admin.contact');
    Route::get('/delete_contact/{id}','AdminDashboardController@delete_contact')->name('admin.contact_delete');

}); 


