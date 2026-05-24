@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Profil Yayasan

        </h1>

        <p class="page-subtitle">

            Mengenal lebih dekat Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img
                src="{{ asset('images/logo.png') }}"
                class="img-fluid rounded-5 shadow-lg">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold display-5 mb-4">

                    Yayasan Nurul Ma'rifah

                </h2>

                <p class="text-secondary fs-5 lh-lg">

                    Yayasan Nurul Ma'rifah merupakan lembaga pendidikan
                    Islam modern yang berkomitmen membangun generasi
                    unggul, berprestasi, dan berakhlakul karimah.

                </p>

                <p class="text-secondary fs-5 lh-lg">

                    Dengan sistem pendidikan terpadu mulai dari
                    PAUD, SD, SMP hingga SMA,
                    kami terus menghadirkan pendidikan berkualitas
                    berbasis nilai Islami dan teknologi modern.

                </p>

            </div>

        </div>

    </div>

</section>

@endsection