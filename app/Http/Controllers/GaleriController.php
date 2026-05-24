<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FRONTEND
    |--------------------------------------------------------------------------
    */

    public function frontend()
    {
        $galeri = Galeri::latest()->get();

        return view(
            'frontend.galeri.index',
            compact('galeri')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view(
            'admin.galeri.index',
            compact('galeri')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.galeri.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp',

        ]);

        $gambar = null;

        /*
        |--------------------------------------------------------------------------
        | UPLOAD GAMBAR
        |--------------------------------------------------------------------------
        */

        if($request->hasFile('gambar')){

            $gambar = time().'_galeri.'.
            $request->gambar->extension();

            $request->gambar->move(

                public_path('uploads/galeri'),

                $gambar

            );

        }

        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATABASE
        |--------------------------------------------------------------------------
        */

        Galeri::create([

            'judul' => $request->judul,

            'kategori' => $request->kategori,

            'gambar' => $gambar,

        ]);

        return redirect('/admin/galeri')
        ->with(
            'success',
            'Galeri berhasil ditambahkan'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | HAPUS FILE GAMBAR
        |--------------------------------------------------------------------------
        */

        $path = public_path(
            'uploads/galeri/'.
            $galeri->gambar
        );

        if(file_exists($path)){

            unlink($path);

        }

        /*
        |--------------------------------------------------------------------------
        | DELETE DATABASE
        |--------------------------------------------------------------------------
        */

        $galeri->delete();

        return back()->with(
            'success',
            'Galeri berhasil dihapus'
        );
    }
}