@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">
    Data Event
</h1>

<div class="card-admin">

    <div class="d-flex justify-content-between mb-4">

        <h5>List Event</h5>

        <a href="/admin/event/create"
        class="btn btn-primary">

            <i class="fas fa-plus me-2"></i>

            Tambah Event

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>No</th>
                    <th>Banner</th>
                    <th>Nama Event</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($event as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td width="180">

                        <img
                        src="{{ asset('uploads/event/'.$item->banner) }}"
                        width="150"
                        height="100">

                    </td>

                    <td>{{ $item->nama_event }}</td>

                    <td>{{ $item->tanggal }}</td>

                    <td>{{ $item->lokasi }}</td>

                    <td width="120">

                        <form
                        action="/admin/event/{{ $item->id }}"
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

                    <td colspan="6"
                    class="text-center">

                        Belum ada event

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection