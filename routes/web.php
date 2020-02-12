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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/hello', function () {
    //return view('welcome');
    return "<h1>Hello Word</h1>";
});
 */

/* 
Route::get('/users/{name}/{id}', function ($name,$id) {
    return "This is user " . $name. ' With an ID of '.$id;
}); */

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController'); // matic routes function
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
