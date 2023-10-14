<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/berita/{id}/detail', [HomeController::class,'berita'])->name('landing.berita');
Route::get('/dosen', function () {
    return view('dosen');
});


Route::get('/vis-misi', [HomeController::class, 'visMisi'])->name('landing.visiMisi');
Route::resource('news',NewsController::class);

Auth::routes();
Route::resource('news',NewsController::class);

Route::get('/home', [NewsController::class, 'index'])->name('home');
