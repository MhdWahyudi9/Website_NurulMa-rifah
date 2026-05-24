@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Berita Sekolah

        </h1>

        <p class="page-subtitle">

            Informasi terbaru seputar kegiatan dan perkembangan
            Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($berita as $item)

            <div class="col-lg-4 col-md-6">

                <div class="modern-card h-100">

                    <div class="modern-image">

                        <img
                        src="{{ asset('uploads/berita/'.$item->thumbnail) }}"
                        alt="{{ $item->judul }}">

                    </div>

                    <div class="modern-content">

                        <div class="mb-3">

                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">

                                Berita Sekolah

                            </span>

                        </div>

                        <h4>

                            {{ $item->judul }}

                        </h4>

                        <p class="modern-description">

                            {{ Str::limit(strip_tags($item->isi), 120) }}

                        </p>

                        <a href="/berita/{{ $item->slug }}"
                        class="btn btn-warning rounded-pill px-4 mt-3">

                            Baca Selengkapnya

                        </a>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center py-5">

                <img
                src="https://cdn-icons-png.flaticon.com/512/6598/6598519.png"
                width="180"
                class="mb-4">

                <h3 class="fw-bold">

                    Belum Ada Berita

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection