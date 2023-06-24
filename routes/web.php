<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//jobsheet
Route::get('/hello', function(){
    return view('hello', ['name' => 'Ananda']);
});
Route::get('/child', function(){
    return view('child');
});

//praktikum 1
Route::get('/home', function(){
    return view('home');
});
Route::prefix('produc')->group(function (){
    Route::get('/product', function(){
        return view('product');
    })->name('produc.product');
});
Route::get('/news', function(){
    return view('news');
}) ->name('news');
Route::get('/program', function(){
    return view('program');
}) ->name('program');
Route::get('/about', function(){
    return view('about-us');
}) ->name('about');
Route::get('/contact', function(){
    return view('contact-us');
}) ->name('contact');
