<?php

use App\Http\Controllers\Front\TopController;
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
    Route::group(['namespace' => 'Front', 'as' => 'front.'], function() {
        Route::get('/', [TopController::class, 'index'])->name('top.index');
        Route::post('/top/login/', [TopController::class, 'login'])->name('top.login');
        Route::group(['middleware' => ['auth:front']], function() {
        });
    });
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
        Route::group(['middleware' => ['auth:admin']], function() {
        });
    });
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
