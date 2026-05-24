@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Prestasi Sekolah

        </h1>

        <p class="page-subtitle">

            Prestasi siswa dan sekolah
            Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            @forelse($prestasi as $item)

            <div class="col-lg-4 col-md-6">

                <div class="modern-card h-100">

                    <div class="modern-image">

                        <img
                        src="{{ asset('uploads/prestasi/'.$item->foto) }}"
                        alt="{{ $item->nama_prestasi }}">

                    </div>

                    <div class="modern-content">

                        <div class="modern-badge">

                            {{ $item->tahun }}

                        </div>

                        <h4 class="mt-4">

                            {{ $item->nama_prestasi }}

                        </h4>

                        <p class="text-warning fw-semibold">

                            {{ $item->tingkat }}

                        </p>

                        <p class="modern-description">

                            {{ Str::limit($item->deskripsi,120) }}

                        </p>

                        <a href="/prestasi/{{ $item->id }}"
                        class="btn btn-warning rounded-pill px-4 mt-3">

                            Detail Prestasi

                        </a>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center py-5">

                <h3>

                    Belum Ada Prestasi

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection