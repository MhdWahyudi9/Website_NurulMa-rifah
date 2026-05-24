@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Tambah Event

</h1>

<div class="card-admin">

    <form
    action="/admin/event"
    method="POST"
    enctype="multipart/form-data">

        @csrf

        <div class="mb-4">

            <label class="form-label">

                Nama Event

            </label>

            <input
            type="text"
            name="nama_event"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Tanggal Event

            </label>

            <input
            type="date"
            name="tanggal"
            class="form-control">

        </div>

        <div class="mb-4">

            <label class="form-label">

                Lokasi

            </label>

            <input
            type="text"
            name="lokasi"
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

                Banner

            </label>

            <input
            type="file"
            name="banner"
            class="form-control"
            required>

        </div>

        <button class="btn btn-primary">

            Simpan Event

        </button>

    </form>

</div>

@endsection