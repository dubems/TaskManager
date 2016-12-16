<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware'=>'web'],function()
{
    Route::get('/', function ()
    {
        return view('home');
    })->name('login');

    Route::get('/register',function()
    {
        return view('register');
    })->name('register');

    Route::get('/register/success','Auth\RegisterController@getRegisterSuccess');
    Route::get('/auth/register/{token}','Auth\RegisterController@verifyToken');


    Route::post('/auth/register','Auth\RegisterController@register')->name('signup');

});
