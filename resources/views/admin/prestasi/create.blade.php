@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Tambah Prestasi

</h1>

<div class="card-admin">

    <form
    action="/admin/prestasi"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label class="form-label">

                Nama Prestasi

            </label>

            <input
            type="text"
            name="nama_prestasi"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Tingkat

            </label>

            <input
            type="text"
            name="tingkat"
            class="form-control"
            placeholder="Kabupaten / Provinsi / Nasional">

        </div>

        <div class="mb-4">

            <label class="form-label">

                Tahun

            </label>

            <input
            type="text"
            name="tahun"
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

                Foto

            </label>

            <input
            type="file"
            name="foto"
            class="form-control"
            required>

        </div>

        <button class="btn btn-primary">

            Simpan Prestasi

        </button>

    </form>

</div>

@endsection