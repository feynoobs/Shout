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
    Route::group(['namespace' => 'Front'], function() {
        Route::get('/', [TopController::class, 'index'])->name('front.top.index');
        Route::group(['middleware' => ['auth']], function() {
        });
    });
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
