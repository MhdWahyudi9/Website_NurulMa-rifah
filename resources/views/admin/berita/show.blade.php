@extends('frontend.layouts.app')

@section('content')

<!-- HERO -->
<section
class="py-5"
style="margin-top:100px;">

    <div class="container">

        <div class="row">

            <!-- CONTENT -->
            <div class="col-lg-8">

                <!-- IMAGE -->
                <img
                src="{{ asset('uploads/berita/'.$berita->thumbnail) }}"
                class="img-fluid rounded-4 shadow mb-4 w-100">

                <!-- TITLE -->
                <h1 class="fw-bold mb-3">

                    {{ $berita->judul }}

                </h1>

                <!-- DATE -->
                <p class="text-secondary mb-4">

                    <i class="fas fa-calendar-alt me-2"></i>

                    {{ $berita->created_at->format('d F Y') }}

                </p>

                <!-- CONTENT -->
                <div
                class="bg-white shadow rounded-4 p-4">

                    {!! nl2br($berita->isi) !!}

                </div>

                <!-- SHARE -->
                <div class="mt-5">

                    <h5 class="fw-bold mb-3">

                        Bagikan Berita

                    </h5>

                    <a href="#"
                    class="btn btn-primary rounded-pill me-2">

                        <i class="fab fa-facebook-f"></i>

                    </a>

                    <a href="#"
                    class="btn btn-info rounded-pill me-2">

                        <i class="fab fa-twitter"></i>

                    </a>

                    <a href="#"
                    class="btn btn-success rounded-pill">

                        <i class="fab fa-whatsapp"></i>

                    </a>

                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4">

                <div class="bg-white shadow rounded-4 p-4">

                    <h4 class="fw-bold mb-4">

                        Berita Terbaru

                    </h4>

                    @foreach($beritaTerbaru as $item)

                    <a href="/berita/{{ $item->slug }}"
                    class="text-dark">

                        <div class="d-flex mb-4">

                            <img
                            src="{{ asset('uploads/berita/'.$item->thumbnail) }}"
                            width="100"
                            height="80"
                            class="rounded-3 me-3"
                            style="object-fit:cover;">

                            <div>

                                <h6 class="fw-bold">

                                    {{ $item->judul }}

                                </h6>

                                <small class="text-secondary">

                                    {{ $item->created_at->format('d M Y') }}

                                </small>

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