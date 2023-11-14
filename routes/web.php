<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NavbarController;
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
Route::get('/dosen/farmasi', [HomeController::class,'dosen_farmasi'])->name('landing.dosen-farmasi');
Route::get('/dosen/tlm', [HomeController::class,'dosen_tlm'])->name('landing.dosen-tlm');
Route::get('/tenaga_pendidik', [HomeController::class,'tenaga_pendidik'])->name('landing.tenaga-pendidik');
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
Route::resource('admin/navbar',NavbarController::class);

Route::get('admin/{navbar}/menu',[NavbarController::class,'index_menu'])->name('menu.index');
Route::get('admin/menu/{menu}/sub_menu',[NavbarController::class,'index_sub_menu'])->name('sub_menu.index');

Route::get('admin/{navbar}/url',[NavbarController::class,'url'])->name('navbar.url');
Route::get('admin/{menu}/{navbar}/url',[NavbarController::class,'menu_url'])->name('menu.url');
Route::post('admin/navbar/{navbar}/url/store',[NavbarController::class,'store_url'])->name('navbar.url.store');
Route::post('admin/menu/{menu}/{navbar}/url/store',[NavbarController::class,'store_menu_url'])->name('menu.url.store');

Route::get('admin/{navbar}/menu/create',[NavbarController::class,'create_menu'])->name('menu.create');
Route::get('admin/menu/{menu}/sub_menu/create',[NavbarController::class,'create_sub_menu'])->name('sub_menu.create');
Route::post('admin/{navbar}/menu/store',[NavbarController::class,'store_menu'])->name('menu.store');
Route::post('admin/menu/{menu}/sub_menu/store',[NavbarController::class,'store_sub_menu'])->name('sub_menu.store');

Route::get('admin/menu/{menu}/{navbar}/edit',[NavbarController::class,'edit_menu'])->name('menu.edit');
Route::get('admin/sub_menu/{sub_menu}/{menu}/edit',[NavbarController::class,'edit_sub_menu'])->name('sub_menu.edit');
Route::post('admin/menu/{menu}/{navbar}/update',[NavbarController::class,'update_menu'])->name('menu.update');
Route::post('admin/sub_menu/{sub_menu}/{menu}/update',[NavbarController::class,'update_sub_menu'])->name('sub_menu.update');

Route::get('admin/{navbar}/delete',[NavbarController::class,'destroy'])->name('navbar.delete');
Route::get('admin/menu/{menu}/{navbar}/destroy',[NavbarController::class,'destroy_menu'])->name('menu.destroy');
Route::get('admin/sub_menu/{sub_menu}/{menu}/destroy',[NavbarController::class,'destroy_sub_menu'])->name('sub_menu.destroy');



Route::get('/home', [NewsController::class, 'index'])->name('home');
