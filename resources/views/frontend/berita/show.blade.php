@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Detail Berita

        </h1>

        <p class="page-subtitle">

            Informasi lengkap berita Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="bg-white shadow-lg rounded-5 overflow-hidden">

                    <img
                    src="{{ asset('uploads/berita/'.$berita->thumbnail) }}"
                    class="w-100"
                    style="height:450px; object-fit:cover;">

                    <div class="p-5">

                        <span class="badge bg-warning text-dark px-4 py-2 rounded-pill mb-4">

                            Berita Sekolah

                        </span>

                        <h1 class="fw-bold mb-4">

                            {{ $berita->judul }}

                        </h1>

                        <div class="text-secondary lh-lg">

                            {!! $berita->isi !!}

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="bg-white shadow rounded-5 p-4">

                    <h4 class="fw-bold mb-4">

                        Berita Terbaru

                    </h4>

                    @foreach($beritaTerbaru as $item)

                    <a href="/berita/{{ $item->slug }}"
                    class="text-decoration-none">

                        <div class="d-flex mb-4">

                            <img
                            src="{{ asset('uploads/berita/'.$item->thumbnail) }}"
                            width="100"
                            height="80"
                            style="object-fit:cover"
                            class="rounded-4 me-3">

                            <div>

                                <h6 class="fw-bold text-dark">

                                    {{ Str::limit($item->judul, 50) }}

                                </h6>

                            </div>

                        </div>

                    </a>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

@endsection