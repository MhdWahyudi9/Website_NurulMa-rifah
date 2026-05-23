@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">

    <h2>Tambah Slider</h2>

    <form
    action="/admin/slider"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-3">

            <label>Judul</label>

            <input
            type="text"
            name="judul"
            class="form-control">

        </div>

        <div class="mb-3">

            <label>Subjudul</label>

            <textarea
            name="subjudul"
            class="form-control"></textarea>

        </div>

        <div class="mb-3">

            <label>Gambar</label>

            <input
            type="file"
            name="gambar"
            class="form-control">

        </div>

        <div class="mb-3">

            <label>Tombol Text</label>

            <input
            type="text"
            name="tombol_text"
            class="form-control">

        </div>

        <div class="mb-3">

            <label>Tombol Link</label>

            <input
            type="text"
            name="tombol_link"
            class="form-control">

        </div>

        <button class="btn btn-primary">

            Simpan

        </button>

    </form>

</div>

@endsection