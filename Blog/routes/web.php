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

Route::get('/sttt', function () {
    return view('welcome');
});

Route::get('/', 'moteurcontrol@pastpost');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'moteurcontrol@index')->name('home');

Route::get('/post/{slug}', 'moteurcontrol@pastpos');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/contactform', 'moteurcontrol@formsend');


