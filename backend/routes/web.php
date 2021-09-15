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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registation/provisional/index', 'App\Http\Controllers\user\RegistationController@provisional')->name('registation.provisional.index');
Route::get('/registation/provisional/store', 'App\Http\Controllers\user\RegistationController@provisional_store')->name('registation.provisional.store');
Route::get('/registation/main/index', 'App\Http\Controllers\user\RegistationController@main')->name('registation.main.index');
Route::post('/registation/main/confirm', 'App\Http\Controllers\user\RegistationController@main_confirm')->name('registation.main.confrim');
Route::get('/registation/main/store', 'App\Http\Controllers\user\RegistationController@main_store')->name('registation.main.store');
