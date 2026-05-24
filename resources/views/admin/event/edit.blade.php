@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Edit Event

</h1>

<div class="card-admin">

    <form
    action="/admin/event/{{ $event->id }}"
    method="POST"
    enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="form-label">

                Nama Event

            </label>

            <input
            type="text"
            name="nama_event"
            class="form-control"
            value="{{ $event->nama_event }}"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Tanggal

            </label>

            <input
            type="date"
            name="tanggal"
            class="form-control"
            value="{{ $event->tanggal }}"
            required>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Lokasi

            </label>

            <input
            type="text"
            name="lokasi"
            class="form-control"
            value="{{ $event->lokasi }}"
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
            required>{{ $event->deskripsi }}</textarea>

        </div>

        <div class="mb-4">

            <label class="form-label">

                Banner Lama

            </label>

            <br>

            <img
            src="{{ asset('uploads/event/'.$event->banner) }}"
            width="250"
            class="rounded shadow">

        </div>

        <div class="mb-4">

            <label class="form-label">

                Ganti Banner

            </label>

            <input
            type="file"
            name="banner"
            class="form-control">

        </div>

        <button class="btn btn-warning">

            Update Event

        </button>

    </form>

</div>

@endsection