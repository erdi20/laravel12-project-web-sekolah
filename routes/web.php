<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/ekstra', [EkstrakulikulerController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/galerievent', [GaleriController::class, 'event']);
Route::get('/galeriekstra', [GaleriController::class, 'ekstra']);
Route::get('/galeriakademik', [GaleriController::class, 'akademik']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/search', [BeritaController::class, 'index'])->name('berita.search');
Route::get('/beritadetail/{slug}', [BeritaController::class, 'detailBerita']);
Route::get('/kategoriberita/{slug}', [BeritaController::class, 'kategoriberita']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kirimpesan', [KontakController::class, 'store']);
