@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Data Prestasi
</h1>

<div class="card-admin">

    <div class="d-flex justify-content-between mb-4">

        <h5>List Prestasi</h5>

        <a href="/admin/prestasi/create"
        class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Tambah Prestasi

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Foto</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($prestasi as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td width="180">

                        <img
                        src="{{ asset('uploads/prestasi/'.$item->foto) }}"
                        width="150"
                        height="100">

                    </td>

                    <td>{{ $item->nama_prestasi }}</td>

                    <td>{{ $item->tingkat }}</td>

                    <td>{{ $item->tahun }}</td>

                    <td width="120">

                        <form
                        action="/admin/prestasi/{{ $item->id }}"
                        method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                            class="btn btn-danger btn-sm">

                                Hapus

                            </button>

                        </form>
                        <a href="/admin/prestasi/{{ $item->id }}/edit"
                        class="btn btn-warning btn-sm">

                            Edit

                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                    class="text-center">

                        Belum ada prestasi

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection