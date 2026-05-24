@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Galeri Kegiatan

        </h1>

        <p class="page-subtitle">

            Dokumentasi kegiatan Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($galeri as $item)

            <div class="col-lg-4 col-md-6">

                <div class="gallery-card">

                    <img
                    src="{{ asset('uploads/galeri/'.$item->gambar) }}"
                    alt="{{ $item->judul }}">

                    <div class="gallery-overlay">

                        <h4>

                            {{ $item->judul }}

                        </h4>

                        <span>

                            {{ $item->kategori }}

                        </span>

                    </div>

                </div>

            </div>

            @empty

            <div class="text-center py-5">

                <h3>

                    Belum Ada Galeri

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection