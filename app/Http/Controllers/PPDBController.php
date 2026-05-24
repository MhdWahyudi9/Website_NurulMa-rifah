<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FRONTEND
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('frontend.ppdb.ppdb');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenjang' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);

        return back()->with(
            'success',
            'Pendaftaran berhasil dikirim'
        );
    }
}