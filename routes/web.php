<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EkstrakurikulerController;

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'show']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/ppdb', [PPDBController::class, 'index']);
Route::post('/ppdb/store', [PPDBController::class, 'store']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/prestasi', [PrestasiController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::resource('admin/berita', BeritaController::class);

    Route::resource('admin/slider', SliderController::class);

    Route::resource('admin/galeri', GaleriController::class);

    Route::resource('admin/fasilitas', FasilitasController::class);

    Route::resource('admin/prestasi', PrestasiController::class);

    Route::resource('admin/event', EventController::class);

    Route::resource('admin/ekstrakurikuler', EkstrakurikulerController::class);

});

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';