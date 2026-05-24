@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Event Sekolah

        </h1>

        <p class="page-subtitle">

            Informasi kegiatan dan event terbaru Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($event as $item)

            <div class="col-lg-4 col-md-6">

                <div class="modern-card h-100">

                    <div class="modern-image">

                        <img
                        src="{{ asset('uploads/event/'.$item->banner) }}"
                        alt="{{ $item->nama_event }}">

                        <span class="modern-badge">

                            {{ $item->tanggal }}

                        </span>

                    </div>

                    <div class="modern-content">

                        <h4>

                            {{ $item->nama_event }}

                        </h4>

                        <p class="modern-location">

                            <i class="fas fa-map-marker-alt"></i>

                            {{ $item->lokasi }}

                        </p>

                        <p class="modern-description">

                            {{ Str::limit($item->deskripsi, 120) }}

                        </p>
                        
                        <a href="/event/{{ $item->id }}"class="btn btn-warning rounded-pill px-4 mt-3">

                            Detail Event

                        </a>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center py-5">

                <img
                src="https://cdn-icons-png.flaticon.com/512/7486/7486740.png"
                width="180"
                class="mb-4">

                <h3 class="fw-bold">

                    Belum Ada Event

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection