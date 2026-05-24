@extends('frontend.layouts.app')

@section('content')

<!-- HERO -->
<div class="swiper heroSwiper hero-slider">

    <div class="swiper-wrapper">

        @forelse($slider as $item)

        <div class="swiper-slide position-relative">

            <div class="hero-overlay"></div>

            <img
            src="{{ asset('uploads/slider/'.$item->gambar) }}"
            alt="{{ $item->judul }}">

            <div class="hero-caption">

                <span class="hero-badge">

                    Yayasan Nurul Ma'rifah

                </span>

                <h1>

                    {{ $item->judul }}

                </h1>

                <p>

                    {{ $item->subjudul }}

                </p>

                <div class="d-flex flex-wrap gap-3">

                    @if($item->tombol_text)

                    <a href="{{ $item->tombol_link }}"
                    class="btn btn-hero">

                        {{ $item->tombol_text }}

                    </a>

                    @endif

                    <a href="/profil"
                    class="btn btn-outline-light btn-lg rounded-pill px-4">

                        Tentang Kami

                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="swiper-slide position-relative">

            <div class="hero-overlay"></div>

            <img
            src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200">

            <div class="hero-caption">

                <span class="hero-badge">

                    Website Resmi

                </span>

                <h1>

                    Yayasan Nurul Ma'rifah

                </h1>

                <p>

                    Pendidikan Islam modern untuk membangun
                    generasi unggul dan berakhlakul karimah.

                </p>

            </div>

        </div>

        @endforelse

    </div>

    <div class="swiper-pagination"></div>

</div>

<!-- ABOUT -->
<section>

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img
                src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1200"
                class="img-fluid rounded-5 shadow-lg">

            </div>

            <div class="col-lg-6">

                <span class="badge bg-warning text-dark px-4 py-2 rounded-pill mb-4">

                    Tentang Yayasan

                </span>

                <h2 class="fw-bold display-4 mb-4">

                    Pendidikan Modern Berbasis Islami

                </h2>

                <p class="text-secondary fs-5 lh-lg">

                    Yayasan Nurul Ma'rifah hadir sebagai lembaga pendidikan
                    Islam modern yang berkomitmen membangun generasi
                    unggul, cerdas, kreatif, dan berakhlakul karimah.

                </p>

                <p class="text-secondary fs-5 lh-lg">

                    Kami menyediakan pendidikan terpadu mulai dari
                    PAUD, SD, SMP hingga SMA dengan lingkungan belajar
                    yang nyaman dan berkualitas.

                </p>

                <div class="row mt-5 g-4">

                    <div class="col-6">

                        <div class="about-stat">

                            <h1>

                                {{ $totalBerita }}+

                            </h1>

                            <p>

                                Berita Sekolah

                            </p>

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="about-stat">

                            <h1>

                                {{ $totalGaleri }}+

                            </h1>

                            <p>

                                Galeri Kegiatan

                            </p>

                        </div>

                    </div>

                </div>

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

        <p class="section-subtitle">

            Yayasan Nurul Ma'rifah menyediakan pendidikan
            terbaik dari usia dini hingga sekolah menengah atas.

        </p>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <a href="/sekolah/paud">

                    <div class="school-card">

                        <img
                        src="https://images.unsplash.com/photo-1588072432836-e10032774350">

                        <div class="card-body text-center">

                            <h4>

                                PAUD

                            </h4>

                            <p>

                                Pendidikan usia dini yang menyenangkan.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-lg-3 col-md-6">

                <a href="/sekolah/sd">

                    <div class="school-card">

                        <img
                        src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b">

                        <div class="card-body text-center">

                            <h4>

                                SD

                            </h4>

                            <p>

                                Pendidikan dasar berbasis karakter Islami.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-lg-3 col-md-6">

                <a href="/sekolah/smp">

                    <div class="school-card">

                        <img
                        src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6">

                        <div class="card-body text-center">

                            <h4>

                                SMP

                            </h4>

                            <p>

                                Membentuk siswa kreatif dan disiplin.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

            <div class="col-lg-3 col-md-6">

                <a href="/sekolah/sma">

                    <div class="school-card">

                        <img
                        src="https://images.unsplash.com/photo-1513258496099-48168024aec0">

                        <div class="card-body text-center">

                            <h4>

                                SMA

                            </h4>

                            <p>

                                Menyiapkan generasi unggul masa depan.

                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- BERITA -->
<section>

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap gap-3">

            <div>

                <h2 class="section-title text-start mb-2">

                    Berita Terbaru

                </h2>

                <p class="text-secondary">

                    Informasi terbaru kegiatan sekolah

                </p>

            </div>

            <a href="/berita"
            class="btn btn-warning rounded-pill px-4">

                Lihat Semua

            </a>

        </div>

        <div class="row g-4">

            @forelse($berita as $item)

            <div class="col-lg-4">

                <div class="modern-card h-100">

                    <div class="modern-image">

                        <img
                        src="{{ asset('uploads/berita/'.$item->thumbnail) }}"
                        alt="{{ $item->judul }}">

                    </div>

                    <div class="modern-content">

                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3">

                            Berita Sekolah

                        </span>

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
                src="https://cdn-icons-png.flaticon.com/512/7486/7486740.png"
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

<!-- KEUNGGULAN -->
<section class="bg-light">

    <div class="container">

        <h2 class="section-title">

            Kenapa Memilih Kami?

        </h2>

        <p class="section-subtitle">

            Kami menghadirkan pendidikan modern
            dengan kualitas terbaik untuk masa depan siswa.

        </p>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="feature-box h-100">

                    <i class="fas fa-school fa-4x"></i>

                    <h4>

                        Fasilitas Lengkap

                    </h4>

                    <p>

                        Ruang belajar nyaman,
                        laboratorium modern,
                        dan lingkungan yang mendukung.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-box h-100">

                    <i class="fas fa-user-graduate fa-4x"></i>

                    <h4>

                        Guru Profesional

                    </h4>

                    <p>

                        Tenaga pengajar berkualitas
                        dan berpengalaman di bidangnya.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-box h-100">

                    <i class="fas fa-award fa-4x"></i>

                    <h4>

                        Banyak Prestasi

                    </h4>

                    <p>

                        Aktif meraih prestasi
                        akademik maupun non akademik.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GALERI -->
<section>

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap gap-3">

            <div>

                <h2 class="section-title text-start mb-2">

                    Galeri Kegiatan

                </h2>

                <p class="text-secondary">

                    Dokumentasi kegiatan sekolah dan yayasan

                </p>

            </div>

            <a href="/galeri"
            class="btn btn-warning rounded-pill px-4">

                Lihat Semua

            </a>

        </div>

        <div class="row g-4">

            @forelse($galeri as $item)

            <div class="col-lg-4 col-md-6">

                <div class="gallery-card">

                    <img
                    src="{{ asset('uploads/galeri/'.$item->gambar) }}"
                    alt="{{ $item->judul }}">

                    <div class="gallery-overlay">

                        <h4>

                            {{ $item->judul }}

                        </h4>

                        <span>

                            {{ $item->kategori }}

                        </span>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center py-5">

                <h3>

                    Belum Ada Galeri

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

<!-- STATISTIK -->
<section class="bg-light">

    <div class="container">

        <div class="row g-4 text-center">

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h1>

                        {{ $totalBerita }}+

                    </h1>

                    <p>

                        Berita

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h1>

                        {{ $totalGaleri }}+

                    </h1>

                    <p>

                        Galeri

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h1>

                        {{ $totalPrestasi }}+

                    </h1>

                    <p>

                        Prestasi

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-box">

                    <h1>

                        {{ $totalEkskul }}+

                    </h1>

                    <p>

                        Ekstrakurikuler

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section>

    <div class="container">

        <div class="ppdb-section text-center shadow-lg">

            <span class="badge bg-dark px-4 py-2 rounded-pill mb-4">

                PPDB TELAH DIBUKA

            </span>

            <h1 class="fw-bold display-4 mb-4">

                Bergabung Bersama Kami

            </h1>

            <p class="fs-4 mb-5">

                Segera daftarkan putra-putri terbaik Anda
                di Yayasan Nurul Ma'rifah.

            </p>

            <a href="/ppdb"
            class="btn btn-dark btn-lg rounded-pill px-5 py-3">

                Daftar Sekarang

            </a>

        </div>

    </div>

</section>

@endsection