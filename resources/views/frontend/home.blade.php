@extends('frontend.layouts.app')

@section('content')

<!-- HERO SLIDER -->
<div class="swiper heroSwiper hero-slider">

    <div class="swiper-wrapper">

        @foreach($slider as $item)

        <div class="swiper-slide position-relative">

            <!-- OVERLAY -->
            <div class="hero-overlay"></div>

            <!-- GAMBAR -->
            <img
            src="{{ asset('uploads/slider/'.$item->gambar) }}"
            alt="{{ $item->judul }}">

            <!-- CAPTION -->
            <div class="hero-caption">

                <h1 data-aos="fade-up">
                    {{ $item->judul }}
                </h1>

                <p data-aos="fade-up">

                    {{ $item->subjudul }}

                </p>

                @if($item->tombol_text)

                <a href="{{ $item->tombol_link }}"
                class="btn btn-hero">

                    {{ $item->tombol_text }}

                </a>

                @endif

            </div>

        </div>

        @endforeach

    </div>

    <!-- PAGINATION -->
    <div class="swiper-pagination"></div>

</div>

<!-- TENTANG -->
<section>

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 mb-4"
            data-aos="fade-right">

                <img
                src="https://images.unsplash.com/photo-1588072432836-e10032774350"
                class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-md-6"
            data-aos="fade-left">

                <h2 class="mb-4 fw-bold">

                    Tentang Yayasan

                </h2>

                <p class="text-secondary">

                    Yayasan Nurul Ma'rifah merupakan lembaga pendidikan
                    modern yang memiliki jenjang PAUD, SD, SMP,
                    dan SMA dengan konsep pendidikan islami,
                    modern, dan berkualitas.

                </p>

                <p class="text-secondary">

                    Kami berkomitmen menciptakan generasi yang
                    cerdas, disiplin, berakhlak mulia,
                    dan siap menghadapi masa depan.

                </p>

                <a href="/profil"
                class="btn btn-warning rounded-pill px-4 py-2 mt-3">

                    Selengkapnya

                </a>

            </div>

        </div>

    </div>

</section>

<!-- UNIT SEKOLAH -->
<section class="bg-light">

    <div class="container">

        <h2 class="section-title">

            Unit Pendidikan

        </h2>

        <div class="row">

            <!-- PAUD -->
            <div class="col-lg-3 col-md-6 mb-4"
            data-aos="zoom-in">

                <div class="card school-card shadow h-100">

                    <img
                    src="https://images.unsplash.com/photo-1588072432836-e10032774350"
                    class="card-img-top">

                    <div class="card-body text-center">

                        <h4>PAUD</h4>

                        <p>
                            Pendidikan anak usia dini
                            yang menyenangkan.
                        </p>

                    </div>

                </div>

            </div>

            <!-- SD -->
            <div class="col-lg-3 col-md-6 mb-4"
            data-aos="zoom-in">

                <div class="card school-card shadow h-100">

                    <img
                    src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b"
                    class="card-img-top">

                    <div class="card-body text-center">

                        <h4>SD</h4>

                        <p>
                            Pendidikan dasar terbaik
                            untuk anak.
                        </p>

                    </div>

                </div>

            </div>

            <!-- SMP -->
            <div class="col-lg-3 col-md-6 mb-4"
            data-aos="zoom-in">

                <div class="card school-card shadow h-100">

                    <img
                    src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6"
                    class="card-img-top">

                    <div class="card-body text-center">

                        <h4>SMP</h4>

                        <p>
                            Membentuk siswa kreatif
                            dan disiplin.
                        </p>

                    </div>

                </div>

            </div>

            <!-- SMA -->
            <div class="col-lg-3 col-md-6 mb-4"
            data-aos="zoom-in">

                <div class="card school-card shadow h-100">

                    <img
                    src="https://images.unsplash.com/photo-1513258496099-48168024aec0"
                    class="card-img-top">

                    <div class="card-body text-center">

                        <h4>SMA</h4>

                        <p>
                            Mempersiapkan generasi
                            unggul masa depan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- KEUNGGULAN -->
<section>

    <div class="container">

        <h2 class="section-title">

            Kenapa Memilih Kami?

        </h2>

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="feature-box shadow text-center">

                    <i class="fas fa-school fa-4x"></i>

                    <h4>Fasilitas Lengkap</h4>

                    <p>

                        Ruang belajar nyaman,
                        laboratorium lengkap,
                        dan lingkungan sekolah modern.

                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="feature-box shadow text-center">

                    <i class="fas fa-user-graduate fa-4x"></i>

                    <h4>Guru Profesional</h4>

                    <p>

                        Didukung tenaga pengajar
                        berkualitas dan berpengalaman.

                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="feature-box shadow text-center">

                    <i class="fas fa-award fa-4x"></i>

                    <h4>Banyak Prestasi</h4>

                    <p>

                        Aktif meraih prestasi
                        akademik dan non akademik.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GALERI -->
<section class="bg-light">

    <div class="container">

        <h2 class="section-title">

            Galeri Kegiatan

        </h2>

        <div class="row gallery">

            <div class="col-lg-4 col-md-6 mb-4">

                <img
                src="https://images.unsplash.com/photo-1509062522246-3755977927d7"
                class="img-fluid shadow">

            </div>

            <div class="col-lg-4 col-md-6 mb-4">

                <img
                src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1"
                class="img-fluid shadow">

            </div>

            <div class="col-lg-4 col-md-6 mb-4">

                <img
                src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6"
                class="img-fluid shadow">

            </div>

        </div>

    </div>

</section>

<!-- STATISTIK -->
<section>

    <div class="container">

        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="fw-bold text-warning">
                    1200+
                </h1>

                <p>Siswa</p>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="fw-bold text-warning">
                    80+
                </h1>

                <p>Guru</p>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="fw-bold text-warning">
                    35+
                </h1>

                <p>Prestasi</p>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="fw-bold text-warning">
                    15+
                </h1>

                <p>Ekstrakurikuler</p>

            </div>

        </div>

    </div>

</section>

@endsection