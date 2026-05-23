<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{

    public function index()
    {

        $galeri = Galeri::latest()->get();

        return view('admin.galeri.index', compact('galeri'));

    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image',
        ]);

        $gambar = null;

        if($request->hasFile('gambar')){

            $gambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/galeri'),
                $gambar
            );

        }

        Galeri::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $gambar,
        ]);

        return redirect('/admin/galeri')
        ->with('success','Galeri berhasil ditambahkan');

    }

    public function destroy($id)
    {

        $galeri = Galeri::findOrFail($id);

        $galeri->delete();

        return back()
        ->with('success','Galeri berhasil dihapus');

    }

}