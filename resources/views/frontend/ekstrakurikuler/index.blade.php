@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Ekstrakurikuler

        </h1>

        <p class="page-subtitle">

            Pengembangan bakat dan minat siswa

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($ekstrakurikuler as $item)

            <div class="col-lg-4 col-md-6">

                <div class="modern-card h-100">

                    <div class="modern-image">

                        <img
                        src="{{ asset('uploads/ekstrakurikuler/'.$item->gambar) }}"
                        alt="{{ $item->nama_ekskul }}">

                    </div>

                    <div class="modern-content">

                        <h4>

                            {{ $item->nama_ekskul }}

                        </h4>

                        <div class="modern-teacher">

                            Pembina:
                            {{ $item->pembina }}

                        </div>

                        <p class="modern-description">

                            {{ Str::limit($item->deskripsi, 120) }}

                        </p>

                    </div>

                </div>

            </div>

            @empty

            <div class="text-center py-5">

                <h3>

                    Belum Ada Data Ekskul

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection