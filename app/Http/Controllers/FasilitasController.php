<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();

        if(request()->is('admin/*')){

            return view('admin.fasilitas.index', compact('fasilitas'));

        }

        return view('frontend.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $gambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(
            public_path('uploads/fasilitas'),
            $gambar
        );

        Fasilitas::create([

            'nama_fasilitas' => $request->nama_fasilitas,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('/admin/fasilitas')
        ->with('success','Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $item = Fasilitas::findOrFail($id);

        $item->delete();

        return back();
    }
}