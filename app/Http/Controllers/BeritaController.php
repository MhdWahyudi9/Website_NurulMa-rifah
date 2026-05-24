<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{

    public function index()
    {

        $berita = Berita::latest()->get();

        return view('admin.berita.index', compact('berita'));

    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'thumbnail' => 'required|image'
        ]);

        $thumbnail = null;

        if($request->hasFile('thumbnail')){

            $thumbnail = time().'.'.$request->thumbnail->extension();

            $request->thumbnail->move(
                public_path('uploads/berita'),
                $thumbnail
            );

        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul.'-'.time()),
            'isi' => $request->isi,
            'thumbnail' => $thumbnail,
            'author_id' => null,
        ]);

        return redirect('/admin/berita')
        ->with('success','Berita berhasil ditambahkan');

    }

    public function show($slug)
    {

        $berita = Berita::where('slug', $slug)->firstOrFail();

        $beritaTerbaru = Berita::latest()
        ->take(5)
        ->get();

        return view('frontend.berita.show', compact(
            'berita',
            'beritaTerbaru'
        ));

    }

    public function edit($id)
    {

        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));

    }

    public function update(Request $request, $id)
    {

        $berita = Berita::findOrFail($id);

        $thumbnail = $berita->thumbnail;

        if($request->hasFile('thumbnail')){

            $thumbnail = time().'.'.$request->thumbnail->extension();

            $request->thumbnail->move(
                public_path('uploads/berita'),
                $thumbnail
            );

        }

        $berita->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'thumbnail' => $thumbnail,
        ]);

        return redirect('/admin/berita')
        ->with('success','Berita berhasil diupdate');

    }


    public function destroy($id)
    {

        $berita = Berita::findOrFail($id);

        $berita->delete();

        return back()->with('success','Berita berhasil dihapus');

    }

    public function frontend()
    {
        $berita = Berita::latest()->get();

        return view(
            'frontend.berita.index',
            compact('berita')
        );
    }

    public function showFrontend($slug)
    {
        $berita = Berita::where(
            'slug',
            $slug
        )->firstOrFail();

        return view(
            'frontend.berita.show',
            compact('berita')
        );
    }

}