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

Route::group(['middleware' => 'guest'], function (){
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::get('/login', function () {
        return view('auth.login');
    });
});
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
