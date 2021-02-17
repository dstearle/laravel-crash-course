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

// Default Page
Route::get('/', function () {
    return view('welcome');
});

// Hello Page
Route::get('/hello', function () {
    // return view('welcome');
    return '<h1>Hello There!</h1>';
});