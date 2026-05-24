@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Detail Event

        </h1>

        <p class="page-subtitle">

            Informasi kegiatan sekolah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="bg-white shadow-lg rounded-5 overflow-hidden">

                    <img
                    src="{{ asset('uploads/event/'.$event->banner) }}"
                    class="w-100"
                    style="height:450px;object-fit:cover;">

                    <div class="p-5">

                        <div class="mb-4">

                            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill">

                                {{ $event->tanggal }}

                            </span>

                        </div>

                        <h1 class="fw-bold mb-4">

                            {{ $event->nama_event }}

                        </h1>

                        <h5 class="text-warning fw-bold mb-4">

                            <i class="fas fa-map-marker-alt me-2"></i>

                            {{ $event->lokasi }}

                        </h5>

                        <div class="text-secondary fs-5 lh-lg">

                            {!! nl2br(e($event->deskripsi)) !!}

                        </div>

                        <div class="mt-5">

                            <a href="/event"
                            class="btn btn-warning rounded-pill px-4">

                                Kembali

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection