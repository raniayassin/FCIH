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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'coursesController@index')->name('courses');
Route::get('/notifications', 'notifications@index')->name('notifications');
Route::get('/usersboard', 'usersboard@show')->name('usersboard');
Route::get('/delete/{id}', 'usersboard@deleteUser') ;
Route::get('/usersboard', 'usersboard@showusers')->name('usersboard');
Route::get('/track/index','TrackController@index')->name('index');

Route::post('/login.custom',[

    'uses' => 'LoginController@login',
    'as' => 'login.custom'

]);

Route::group(['middleware' => 'auth'], function(){

     Route::get('/home', function(){

     	return view('home');

     })->name('home');
      Route::get('/dashboard', function(){

     	return view('dashboard');
     	
     })->name('dashboard');

});
