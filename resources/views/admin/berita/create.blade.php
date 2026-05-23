@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Tambah Berita
</h1>

<div class="card-admin">

    <form
    action="/admin/berita"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label class="form-label">

                Judul Berita

            </label>

            <input
            type="text"
            name="judul"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Thumbnail

            </label>

            <input
            type="file"
            name="thumbnail"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Isi Berita

            </label>

            <textarea
            name="isi"
            rows="10"
            class="form-control"
            required></textarea>

        </div>

        <button
        class="btn btn-primary">

            Simpan Berita

        </button>

    </form>

</div>

@endsection