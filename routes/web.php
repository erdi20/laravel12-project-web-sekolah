<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/ekstra', [EkstrakulikulerController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/beritadetail', [BeritaController::class, 'detail']);
Route::get('/kontak', [KontakController::class, 'index']);
