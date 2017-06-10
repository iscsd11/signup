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

// Route::get('/', function () {
//     $name = 'tad';
//     $say  = '嗨！';
//     $day  = date("Ymd");
//     return view('welcome', compact('name', 'say', 'day'));
// });

Route::get('/action/create', function () {
    return view('create');
})->name('action.create');
