@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Tambah Fasilitas

</h1>

<div class="card-admin">

    <form
    action="/admin/fasilitas"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label class="form-label">

                Nama Fasilitas

            </label>

            <input
            type="text"
            name="nama_fasilitas"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Deskripsi

            </label>

            <textarea
            name="deskripsi"
            class="form-control"
            rows="5"></textarea>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Gambar

            </label>

            <input
            type="file"
            name="gambar"
            class="form-control"
            required>

        </div>

        <button class="btn btn-primary">

            Simpan

        </button>

    </form>

</div>

@endsection