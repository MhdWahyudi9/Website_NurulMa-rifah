<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PPDBController;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\EkstrakurikulerController;

/*
|--------------------------------------------------------------------------
| FRONTEND PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/profil', [HomeController::class,'profil']);

Route::view('/visi-misi','frontend.visi-misi');
Route::view('/kontak','frontend.kontak');
Route::view('/pengumuman','frontend.pengumuman');

/*
|--------------------------------------------------------------------------
| UNIT SEKOLAH
|--------------------------------------------------------------------------
*/

Route::view('/sekolah/paud','frontend.sekolah.paud');
Route::view('/sekolah/sd','frontend.sekolah.sd');
Route::view('/sekolah/smp','frontend.sekolah.smp');
Route::view('/sekolah/sma','frontend.sekolah.sma');

/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita',[BeritaController::class,'frontend']);
Route::get('/berita/{slug}',[BeritaController::class,'showFrontend']);

/*
|--------------------------------------------------------------------------
| EVENT
|--------------------------------------------------------------------------
*/

Route::get('/event/{id}',[EventController::class,'showFrontend']);
Route::get('/event',[EventController::class,'frontend']);
/*
|--------------------------------------------------------------------------
| PRESTASI
|--------------------------------------------------------------------------
*/

Route::get('/prestasi',[PrestasiController::class,'frontend']);
Route::get('/prestasi/{id}',[PrestasiController::class,'showFrontend']);

/*
|--------------------------------------------------------------------------
| GALERI
|--------------------------------------------------------------------------
*/

Route::get('/galeri',[GaleriController::class,'frontend']);

/*
|--------------------------------------------------------------------------
| FASILITAS
|--------------------------------------------------------------------------
*/

Route::get('/fasilitas',[FasilitasController::class,'frontend']);

/*
|--------------------------------------------------------------------------
| EKSTRAKURIKULER
|--------------------------------------------------------------------------
*/

Route::get('/ekstrakurikuler',[EkstrakurikulerController::class,'frontend']);

/*
|--------------------------------------------------------------------------
| PPDB
|--------------------------------------------------------------------------
*/

Route::get('/ppdb',[PPDBController::class,'index']);
Route::post('/ppdb/store',[PPDBController::class,'store']);

/*
|--------------------------------------------------------------------------
| DASHBOARD & PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard',[HomeController::class,'dashboard'])
    ->name('dashboard');

    Route::get('/profile',[ProfileController::class,'edit'])
    ->name('profile.edit');

    Route::patch('/profile',[ProfileController::class,'update'])
    ->name('profile.update');

    Route::delete('/profile',[ProfileController::class,'destroy'])
    ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
->prefix('admin')
->group(function(){

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard',[HomeController::class,'dashboard']);

    /*
    |--------------------------------------------------------------------------
    | MASTER DATA
    |--------------------------------------------------------------------------
    */

    Route::resources([

        'berita' => BeritaController::class,
        'slider' => SliderController::class,
        'galeri' => GaleriController::class,
        'fasilitas' => FasilitasController::class,
        'prestasi' => PrestasiController::class,
        'event' => EventController::class,
        'ekstrakurikuler' => EkstrakurikulerController::class,

    ]);

});

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';