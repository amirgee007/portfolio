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


Route::get('/obsesion', function () {
    return view('obsesion');
});


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/emailSend', function () {
    return view('frontend.index');
});



Route::post('/emailSend', array(
    'as' => 'email.send',
    'uses' => 'PortfolioController@emailSend'));

