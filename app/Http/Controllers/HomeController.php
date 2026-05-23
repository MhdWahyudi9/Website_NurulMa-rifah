<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{

    public function index()
    {

        $slider = Slider::latest()->get();

        return view('frontend.home', compact('slider'));

    }

    public function profil()
    {
        return view('frontend.profil');
    }

}