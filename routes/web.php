<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\SliderController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', [HomeController::class, 'profil']);

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{slug}', [BeritaController::class, 'show']);

Route::get('/galeri', [GaleriController::class, 'index']);

Route::get('/ppdb', [PPDBController::class, 'index']);

Route::post('/ppdb/store', [PPDBController::class, 'store']);

Route::get('/paud', [HomeController::class, 'paud']);
Route::get('/sd', [HomeController::class, 'sd']);
Route::get('/smp', [HomeController::class, 'smp']);
Route::get('/sma', [HomeController::class, 'sma']);

Route::get('/event', [EventController::class, 'index']);
Route::get('/prestasi', [PrestasiController::class, 'index']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);

Route::resource('admin/slider', SliderController::class);