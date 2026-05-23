@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">

        <h2>Data Slider</h2>

        <a href="/admin/slider/create"
        class="btn btn-primary">

            Tambah Slider

        </a>

    </div>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>

        @foreach($slider as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td width="200">

                <img
                src="{{ asset('uploads/slider/'.$item->gambar) }}"
                class="img-fluid">

            </td>

            <td>{{ $item->judul }}</td>

            <td>

                <a href="/admin/slider/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form
                action="/admin/slider/{{ $item->id }}"
                method="POST"
                class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

@endsection