@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Edit Prestasi

</h1>

<div class="card-admin">

    <form
    action="/admin/prestasi/{{ $prestasi->id }}"
    method="POST"
    enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="form-label">

                Nama Prestasi

            </label>

            <input
            type="text"
            name="nama_prestasi"
            class="form-control"
            value="{{ $prestasi->nama_prestasi }}"
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
            value="{{ $prestasi->tingkat }}"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Tahun

            </label>

            <input
            type="text"
            name="tahun"
            class="form-control"
            value="{{ $prestasi->tahun }}"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Deskripsi

            </label>

            <textarea
            name="deskripsi"
            rows="6"
            class="form-control"
            required>{{ $prestasi->deskripsi }}</textarea>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Foto Lama

            </label>

            <br>

            <img
            src="{{ asset('uploads/prestasi/'.$prestasi->foto) }}"
            width="220"
            class="rounded shadow">

        </div>

        <div class="mb-4">

            <label class="form-label">

                Ganti Foto

            </label>

            <input
            type="file"
            name="foto"
            class="form-control">

        </div>

        <button class="btn btn-warning">

            Update Prestasi

        </button>

    </form>

</div>

@endsection