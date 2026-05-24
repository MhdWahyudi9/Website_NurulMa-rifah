<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FRONTEND
    |--------------------------------------------------------------------------
    */

    public function frontend()
    {
        $event = Event::latest()->get();

        return view(
            'frontend.event.index',
            compact('event')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL FRONTEND
    |--------------------------------------------------------------------------
    */

    public function showFrontend($id)
    {
        $event = Event::findOrFail($id);

        return view(
            'frontend.event.show',
            compact('event')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $event = Event::latest()->get();

        return view(
            'admin.event.index',
            compact('event')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.event.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'banner' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        $banner = null;

        if($request->hasFile('banner')){

            $banner = time().'_event.'.
            $request->banner->extension();

            $request->banner->move(
                public_path('uploads/event'),
                $banner
            );

        }

        Event::create([
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'banner' => $banner
        ]);

        return redirect('/admin/event')
        ->with(
            'success',
            'Event berhasil ditambahkan'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW ADMIN
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view(
            'admin.event.show',
            compact('event')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view(
            'admin.event.edit',
            compact('event')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'nama_event' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required'
        ]);

        $banner = $event->banner;

        if($request->hasFile('banner')){

            $path = public_path(
                'uploads/event/'.
                $event->banner
            );

            if(file_exists($path)){
                unlink($path);
            }

            $banner = time().'_event.'.
            $request->banner->extension();

            $request->banner->move(
                public_path('uploads/event'),
                $banner
            );

        }

        $event->update([
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'banner' => $banner
        ]);

        return redirect('/admin/event')
        ->with(
            'success',
            'Event berhasil diupdate'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $path = public_path(
            'uploads/event/'.
            $event->banner
        );

        if(file_exists($path)){
            unlink($path);
        }

        $event->delete();

        return back()->with(
            'success',
            'Event berhasil dihapus'
        );
    }
}