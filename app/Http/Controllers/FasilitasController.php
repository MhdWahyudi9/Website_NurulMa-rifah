<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function frontend()
    {
        $fasilitas = Fasilitas::latest()->get();

        return view('frontend.fasilitas.index', compact('fasilitas'));
    }

    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();

        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = time().'_fasilitas.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/fasilitas'),
                $gambar
            );
        }

        Fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ]);

        return redirect('/admin/fasilitas')
        ->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $item = Fasilitas::findOrFail($id);

        $path = public_path('uploads/fasilitas/'.$item->gambar);

        if (file_exists($path)) {
            unlink($path);
        }

        $item->delete();

        return back()->with('success', 'Fasilitas berhasil dihapus');
    }
}