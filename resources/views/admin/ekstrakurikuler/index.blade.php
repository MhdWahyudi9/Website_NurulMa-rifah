@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Data Ekstrakurikuler
</h1>

<div class="card-admin">

    <div class="d-flex justify-content-between mb-4">

        <h5>List Ekskul</h5>

        <a href="/admin/ekstrakurikuler/create"
        class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Tambah Ekskul

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Ekskul</th>
                    <th>Pembina</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($ekstrakurikuler as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td width="180">

                        <img
                        src="{{ asset('uploads/ekstrakurikuler/'.$item->gambar) }}"
                        width="150"
                        height="100">

                    </td>

                    <td>{{ $item->nama_ekskul }}</td>

                    <td>{{ $item->pembina }}</td>

                    <td width="120">

                        <form
                        action="/admin/ekstrakurikuler/{{ $item->id }}"
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

                        Belum ada ekstrakurikuler

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection