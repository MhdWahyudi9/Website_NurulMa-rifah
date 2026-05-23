@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Data Berita
</h1>

<div class="card-admin">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h5 class="mb-0">
            List Berita
        </h5>

        <a href="/admin/berita/create"
        class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Tambah Berita

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th width="80">No</th>
                    <th width="220">Thumbnail</th>
                    <th>Judul</th>
                    <th width="180">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($berita as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        <img
                        src="{{ asset('uploads/berita/'.$item->thumbnail) }}"
                        width="180"
                        height="120">

                    </td>

                    <td>

                        {{ $item->judul }}

                    </td>

                    <td>

                        <a href="/admin/berita/{{ $item->id }}/edit"
                        class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form
                        action="/admin/berita/{{ $item->id }}"
                        method="POST"
                        class="d-inline">

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

                    <td colspan="4"
                    class="text-center">

                        Belum ada berita

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection