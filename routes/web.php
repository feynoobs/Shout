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

Route::group(['middleware' => ['web']], function() {
    Route::group(['namespace' => 'App\Http\Controllers\Front', 'as' => 'front.'], function() {
        Route::get('/', 'TopController@index')->name('top.index');
        Route::post('/top/login/', 'TopController@login')->name('top.login');
        Route::group(['middleware' => ['auth:users']], function() {
        });
    });
    Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/', 'TopController@index')->name('top.index');
        Route::post('/top/login/', 'TopController@login')->name('top.login');
        Route::group(['middleware' => ['auth:admins']], function() {
        });
    });
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
