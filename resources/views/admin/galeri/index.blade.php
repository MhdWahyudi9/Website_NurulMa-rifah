@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Data Galeri
</h1>

<div class="card-admin">

    <div class="d-flex justify-content-between mb-4">

        <h5>
            List Galeri
        </h5>

        <a href="/admin/galeri/create"
        class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Tambah Galeri

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($galeri as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td width="200">

                        <img
                        src="{{ asset('uploads/galeri/'.$item->gambar) }}"
                        width="180"
                        height="120"
                        style="object-fit:cover;">

                    </td>

                    <td>{{ $item->judul }}</td>

                    <td>{{ $item->kategori }}</td>

                    <td>

                        <form
                        action="/admin/galeri/{{ $item->id }}"
                        method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                            class="btn btn-danger btn-sm">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5"
                    class="text-center">

                        Belum ada galeri

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection