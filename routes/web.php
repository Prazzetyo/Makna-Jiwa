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

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/empty-state', function(){
    return view('empty-state');
});

Route::get('/detail-blog', function(){
    return view('detail-blog');
});

Route::get('/quiz/{id_kategori}', 'ControllerQuiz');