@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Data Fasilitas
</h1>

<div class="card-admin">

    <div class="d-flex justify-content-between mb-4">

        <h5>List Fasilitas</h5>

        <a href="/admin/fasilitas/create"
        class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Tambah Fasilitas

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($fasilitas as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td width="180">

                        <img
                        src="{{ asset('uploads/fasilitas/'.$item->gambar) }}"
                        width="150"
                        height="100">

                    </td>

                    <td>{{ $item->nama_fasilitas }}</td>

                    <td>{{ Str::limit($item->deskripsi,80) }}</td>

                    <td width="150">

                        <form
                        action="/admin/fasilitas/{{ $item->id }}"
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

                        Belum ada fasilitas

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection