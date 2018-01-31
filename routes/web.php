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

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/pr', function () {
    return view('pr');
});
//Route::post('/newRegistration','UserController@newRegistration');
Route::post('/newMessage','UserController@newMessage');