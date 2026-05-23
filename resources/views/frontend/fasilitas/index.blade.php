@extends('frontend.layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">

            Fasilitas Sekolah

        </h1>

        <p class="text-muted">

            Fasilitas terbaik untuk mendukung kegiatan belajar siswa

        </p>

    </div>

    <div class="row g-4">

        @foreach($fasilitas as $item)

        <div class="col-lg-4">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">

                <img
                src="{{ asset('uploads/fasilitas/'.$item->gambar) }}"
                height="240"
                style="object-fit:cover;">

                <div class="card-body">

                    <h4 class="fw-bold">

                        {{ $item->nama_fasilitas }}

                    </h4>

                    <p class="text-muted">

                        {{ $item->deskripsi }}

                    </p>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection