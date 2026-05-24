<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Event;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\Slider;
use App\Models\Ekstrakurikuler;
use App\Models\PPDB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FRONTEND HOME
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | SLIDER
        |--------------------------------------------------------------------------
        */

        $slider = Slider::latest()->get();

        /*
        |--------------------------------------------------------------------------
        | BERITA
        |--------------------------------------------------------------------------
        */

        $berita = Berita::latest()
            ->take(3)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | GALERI
        |--------------------------------------------------------------------------
        */

        $galeri = Galeri::latest()
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | FASILITAS
        |--------------------------------------------------------------------------
        */

        $fasilitas = Fasilitas::latest()
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | PRESTASI
        |--------------------------------------------------------------------------
        */

        $prestasi = Prestasi::latest()
            ->take(3)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | EVENT
        |--------------------------------------------------------------------------
        */

        $event = Event::latest()
            ->take(3)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | EKSTRAKURIKULER
        |--------------------------------------------------------------------------
        */

        $ekstrakurikuler = Ekstrakurikuler::latest()
            ->take(6)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | TOTAL STATISTIK
        |--------------------------------------------------------------------------
        */

        $totalBerita = Berita::count();

        $totalGaleri = Galeri::count();

        $totalPrestasi = Prestasi::count();

        $totalEkskul = Ekstrakurikuler::count();

        /*
        |--------------------------------------------------------------------------
        | RETURN VIEW
        |--------------------------------------------------------------------------
        */

        return view('frontend.home', compact(

            'slider',

            'berita',

            'galeri',

            'fasilitas',

            'prestasi',

            'event',

            'ekstrakurikuler',

            'totalBerita',

            'totalGaleri',

            'totalPrestasi',

            'totalEkskul'

        ));
    }

    /*
    |--------------------------------------------------------------------------
    | PROFIL
    |--------------------------------------------------------------------------
    */

    public function profil()
    {
        return view('frontend.profile');
    }

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {
        $totalBerita = Berita::count();

        $totalGaleri = Galeri::count();

        $totalPPDB = PPDB::count();

        $totalVisitor = 0;

        $totalPrestasi = Prestasi::count();

        $totalEvent = Event::count();

        $totalFasilitas = Fasilitas::count();

        $totalEkskul = Ekstrakurikuler::count();

        return view('dashboard', compact(

            'totalBerita',

            'totalGaleri',

            'totalPPDB',

            'totalVisitor',

            'totalPrestasi',

            'totalEvent',

            'totalFasilitas',

            'totalEkskul'

        ));
    }
}