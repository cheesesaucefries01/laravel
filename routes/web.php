<?php

use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//this will call view /hello.blade.php
Route::get('/hello', function () {
    return view('hello');
});


// Route::get('/products', function () {
//     return view('product.index');
// });




Route::get('/products', [ProductController::class, 'index']);






Route::get('/greet', function () {
    return '<a href="/RC">Hello World</a>';
});

Route::get('/RC', function () {
    return '<a href"CL">Rubiks Cube Master</a>';
});

Route::get('/CL', function () {
    return '<a href="/TS">Im a cat lover</a>';
});

Route::get('/TS', function () {
    return 'I love Taylor Swift';
});

Route::get('/CP', function () {
    return 'Chess Player';
});
