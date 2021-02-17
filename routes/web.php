<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Index Page
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index']);

// Hello Page
Route::get('/hello', function () {
    // return view('welcome');
    return '<h1>Hello There!</h1>';
});

// About Page
Route::get('/about', function () {
    return view('pages.about');
});

// Dynamic Page
// Route::get('/users/{id}', function ($id) {
//     return 'This is user ' . $id;
// });
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' . $name . ' with an ID of ' . $id;
});