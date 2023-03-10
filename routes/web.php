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
    $message = 'Hello Laravel';
    return view('home', compact('message'));
});

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/home', function () {
    return view('home');
})->name('home');