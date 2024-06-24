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
    return view('home');
});


Route::get('/coming-soon', function () {
    return view('comingSoon');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});



Route::get('/anime-detail', function () {
    return view('animeDetail');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blogDetail');
});

Route::get('/movie-detail', function () {
    return view('movieDetail');
});


Route::get('/listing', function () {
    return view('listing');
});