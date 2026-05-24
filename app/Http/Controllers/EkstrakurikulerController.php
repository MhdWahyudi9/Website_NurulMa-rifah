<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function frontend()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();

        return view('frontend.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();

        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required',
            'pembina' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = time().'_ekskul.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/ekstrakurikuler'),
                $gambar
            );
        }

        Ekstrakurikuler::create([
            'nama_ekskul' => $request->nama_ekskul,
            'pembina' => $request->pembina,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar
        ]);

        return redirect('/admin/ekstrakurikuler')
        ->with('success', 'Ekstrakurikuler berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $ekskul = Ekstrakurikuler::findOrFail($id);

        $path = public_path('uploads/ekstrakurikuler/'.$ekskul->gambar);

        if (file_exists($path)) {
            unlink($path);
        }

        $ekskul->delete();

        return back()->with('success', 'Ekstrakurikuler berhasil dihapus');
    }
}