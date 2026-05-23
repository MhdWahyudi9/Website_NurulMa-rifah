@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Tambah Galeri
</h1>

<div class="card-admin">

    <form
    action="/admin/galeri"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label class="form-label">

                Judul Foto

            </label>

            <input
            type="text"
            name="judul"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Kategori

            </label>

            <input
            type="text"
            name="kategori"
            class="form-control"
            placeholder="Contoh: Upacara"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Upload Foto

            </label>

            <input
            type="file"
            name="gambar"
            class="form-control"
            required>

        </div>

        <button class="btn btn-primary">

            Simpan Galeri

        </button>

    </form>

</div>

@endsection