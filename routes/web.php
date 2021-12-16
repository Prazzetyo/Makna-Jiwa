<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailBlogController;
use App\Http\Controllers\DetailSoalController;
use App\Http\Controllers\BlogArtikelController; //load controller post

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

Route::get('/', [Controller::class, 'index']);

Route::get('/blog', [Blog::class, 'index']);

Route::get('/detail-blog/{id_artikel}', [DetailBlogController::class, '__invoke']);

Route::get('/quiz/{id_kategori}', [QuizController::class, '__invoke']);

Route::get('/result', function(){
    return view('result');
});

Route::get('/about-us', function(){
    return view('about-us');
});

Route::resource('blogartikel', BlogArtikelController::class);

Route::resource('categories', CategoryController::class);

Route::get('/detail-soal/{id_category}', [DetailSoalController::class, '__invoke']);

Route::resource('soals', DetailSoalController::class);