<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FRONTEND
    |--------------------------------------------------------------------------
    */

    public function frontend()
    {
        $prestasi = Prestasi::latest()->get();

        return view(
            'frontend.prestasi.index',
            compact('prestasi')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL FRONTEND
    |--------------------------------------------------------------------------
    */

    public function showFrontend($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view(
            'frontend.prestasi.show',
            compact('prestasi')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $prestasi = Prestasi::latest()->get();

        return view(
            'admin.prestasi.index',
            compact('prestasi')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.prestasi.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nama_prestasi' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        $foto = null;

        if($request->hasFile('foto')){

            $foto = time().'_prestasi.'.
            $request->foto->extension();

            $request->foto->move(
                public_path('uploads/prestasi'),
                $foto
            );

        }

        Prestasi::create([
            'nama_prestasi' => $request->nama_prestasi,
            'tingkat' => $request->tingkat,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto
        ]);

        return redirect('/admin/prestasi')
        ->with(
            'success',
            'Prestasi berhasil ditambahkan'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW ADMIN
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view(
            'admin.prestasi.show',
            compact('prestasi')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view(
            'admin.prestasi.edit',
            compact('prestasi')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'nama_prestasi' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required'
        ]);

        $foto = $prestasi->foto;

        if($request->hasFile('foto')){

            $path = public_path(
                'uploads/prestasi/'.
                $prestasi->foto
            );

            if(file_exists($path)){
                unlink($path);
            }

            $foto = time().'_prestasi.'.
            $request->foto->extension();

            $request->foto->move(
                public_path('uploads/prestasi'),
                $foto
            );

        }

        $prestasi->update([
            'nama_prestasi' => $request->nama_prestasi,
            'tingkat' => $request->tingkat,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto
        ]);

        return redirect('/admin/prestasi')
        ->with(
            'success',
            'Prestasi berhasil diupdate'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $path = public_path(
            'uploads/prestasi/'.
            $prestasi->foto
        );

        if(file_exists($path)){
            unlink($path);
        }

        $prestasi->delete();

        return back()->with(
            'success',
            'Prestasi berhasil dihapus'
        );
    }
}