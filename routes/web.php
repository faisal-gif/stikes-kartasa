<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PrestasiController;
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

Route::get('/', [HomeController::class,'welcome'])->name('welcome');
Route::get('/berita/{id}/detail', [HomeController::class,'berita'])->name('landing.berita');
Route::get('/dosen', [HomeController::class,'dosen'])->name('landing.dosen');
Route::get('/prestasi', [HomeController::class,'prestasi'])->name('landing.prestasi');
Route::get('/prestasi/{id}/detail', [HomeController::class,'detailPrestasi'])->name('landing.detailPrestasi');
Route::get('/kalender-akademik', [HomeController::class,'kalender_akademik'])->name('landing.kalender-akademik');
Route::get('/jadwal', [HomeController::class,'jadwal'])->name('landing.jadwal');
Route::get('/vis-misi', [HomeController::class, 'visMisi'])->name('landing.visiMisi');
Route::get('/prodi/farmasi', [HomeController::class,'farmasi'])->name('landing.farmasi');
Route::get('/prodi/tlm', [HomeController::class,'tlm'])->name('landing.tlm');
Route::get('/prodi/kebidanan', [HomeController::class,'kebidanan'])->name('landing.kebidanan');


Auth::routes();
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
Route::resource('admin/news',NewsController::class);
Route::resource('admin/dosen',DosenController::class);
Route::resource('admin/prestasi',PrestasiController::class);

Route::get('/home', [NewsController::class, 'index'])->name('home');
