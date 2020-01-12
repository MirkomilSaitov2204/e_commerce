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

Route::get('/coming', function () {
    return view('coming');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/logining', function () {
    return view('login');
});
Route::get('/registering', function () {
    return view('register');
});

Route::get('/shop', function () {
    return view('shop');
});



















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
