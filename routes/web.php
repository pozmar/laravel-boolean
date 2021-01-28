<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/corso', function (Request $request) {
    return view('corso', compact($request));
})->name('corso');
Route::get('/dopo', function (Request $request) {
    return view('dopo', compact($request));
})->name('dopo');
Route::get('/camp', function (Request $request) {
    return view('camp', compact($request));
})->name('camp');
Route::get('/users', 'UtentiController@index')->name('users');

