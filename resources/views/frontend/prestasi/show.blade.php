@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Detail Prestasi

        </h1>

        <p class="page-subtitle">

            Informasi prestasi siswa dan sekolah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="bg-white shadow-lg rounded-5 overflow-hidden">

                    <img
                    src="{{ asset('uploads/prestasi/'.$prestasi->foto) }}"
                    class="w-100"
                    style="height:450px;object-fit:cover;">

                    <div class="p-5">

                        <div class="mb-4">

                            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill">

                                {{ $prestasi->tahun }}

                            </span>

                        </div>

                        <h1 class="fw-bold mb-3">

                            {{ $prestasi->nama_prestasi }}

                        </h1>

                        <h5 class="text-warning fw-bold mb-4">

                            {{ $prestasi->tingkat }}

                        </h5>

                        <div class="text-secondary fs-5 lh-lg">

                            {!! nl2br(e($prestasi->deskripsi)) !!}

                        </div>

                        <div class="mt-5">

                            <a href="/prestasi"
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