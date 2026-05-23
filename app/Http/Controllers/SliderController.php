<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $slider = Slider::latest()->get();

        return view('admin.slider.index', compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image',
        ]);

        $gambar = null;

        if($request->hasFile('gambar')){

            $gambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/slider'),
                $gambar
            );
        }

        Slider::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'gambar' => $gambar,
            'tombol_text' => $request->tombol_text,
            'tombol_link' => $request->tombol_link,
        ]);

        return redirect('/admin/slider')
        ->with('success','Slider berhasil ditambahkan');

    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {

        $slider = Slider::findOrFail($id);

        $gambar = $slider->gambar;

        if($request->hasFile('gambar')){

            $gambar = time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('uploads/slider'),
                $gambar
            );
        }

        $slider->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'gambar' => $gambar,
            'tombol_text' => $request->tombol_text,
            'tombol_link' => $request->tombol_link,
        ]);

        return redirect('/admin/slider')
        ->with('success','Slider berhasil diupdate');

    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        $slider->delete();

        return back()->with('success','Slider berhasil dihapus');
    }

}