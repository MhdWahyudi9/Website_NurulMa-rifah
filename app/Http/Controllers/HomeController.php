<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Fasilitas;
use App\Models\Prestasi;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::latest()->get();

        $berita = Berita::latest()->take(3)->get();

        $galeri = Galeri::latest()->take(6)->get();

        $fasilitas = Fasilitas::latest()->take(3)->get();

        $prestasi = Prestasi::latest()->take(3)->get();

        return view('frontend.home', compact(
            'slider',
            'berita',
            'galeri',
            'fasilitas',
            'prestasi'
        ));
    }

    public function profil()
    {
        return view('frontend.profile');
    }
}