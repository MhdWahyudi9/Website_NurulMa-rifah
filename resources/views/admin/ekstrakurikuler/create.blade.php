@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Tambah Ekstrakurikuler

</h1>

<div class="card-admin">

    <form
    action="/admin/ekstrakurikuler"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label class="form-label">

                Nama Ekskul

            </label>

            <input
            type="text"
            name="nama_ekskul"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Pembina

            </label>

            <input
            type="text"
            name="pembina"
            class="form-control">

        </div>

        <div class="mb-4">

            <label class="form-label">

                Deskripsi

            </label>

            <textarea
            name="deskripsi"
            rows="5"
            class="form-control"></textarea>

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

            Simpan Ekskul

        </button>

    </form>

</div>

@endsection