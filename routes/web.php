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

Route::get('/', 'Controller@index');

Route::get('/blog', 'Blog@index');

Route::get('/result', function(){
    return view('result');
});

Route::get('/admin', function(){
    return view('admin');
});

Route::get('/messages', function(){
    return view('messages');
});

Route::get('/bookings', function(){
    return view('bookings');
});

Route::get('/listings', function(){
    return view('listings');
});

Route::get('/reviews', function(){
    return view('reviews');
});

Route::get('/bookmarks', function(){
    return view('bookmarks');
});

Route::get('/add-listing', function(){
    return view('add-listing');
});

Route::get('/detail-blog/{id_artikel}', 'DetailBlog');

Route::get('/quiz/{id_kategori}', 'ControllerQuiz');