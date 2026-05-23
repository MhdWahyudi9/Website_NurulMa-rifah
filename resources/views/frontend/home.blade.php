@extends('frontend.layouts.app')

@section('content')

<style>

.hero-slider{
    position:relative;
}

.hero-slider img{
    width:100%;
    height:95vh;
    object-fit:cover;
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(
        to right,
        rgba(0,0,0,0.75),
        rgba(0,0,0,0.3)
    );
    z-index:1;
}

.hero-caption{
    position:absolute;
    top:50%;
    left:10%;
    transform:translateY(-50%);
    z-index:2;
    max-width:700px;
    color:white;
}

.hero-caption h1{
    font-size:70px;
    font-weight:800;
    line-height:1.2;
    margin-bottom:25px;
}

.hero-caption p{
    font-size:22px;
    margin-bottom:35px;
    color:#e2e8f0;
}

.btn-hero{
    background:#facc15;
    color:#0f172a;
    padding:16px 40px;
    border-radius:50px;
    font-weight:700;
    font-size:18px;
    transition:0.3s;
}

.btn-hero:hover{
    background:white;
    transform:translateY(-3px);
}

section{
    padding:100px 0;
}

.section-title{
    text-align:center;
    margin-bottom:60px;
    font-size:50px;
    font-weight:800;
    color:#0f172a;
}

.school-card{
    border:none;
    border-radius:28px;
    overflow:hidden;
    transition:0.4s;
}

.school-card:hover{
    transform:translateY(-10px);
}

.school-card img{
    height:260px;
    object-fit:cover;
}

.feature-box{
    background:white;
    border-radius:28px;
    padding:50px 30px;
    transition:0.3s;
}

.feature-box:hover{
    transform:translateY(-8px);
}

.feature-box i{
    color:#facc15;
    margin-bottom:25px;
}

.gallery img{
    height:280px;
    object-fit:cover;
    transition:0.4s;
}

.gallery img:hover{
    transform:scale(1.05);
}

.ppdb-section{
    background:linear-gradient(135deg,#facc15,#f59e0b);
    color:#0f172a;
    border-radius:40px;
    padding:80px 40px;
}

@media(max-width:768px){

    .hero-caption{
        left:5%;
        right:5%;
    }

    .hero-caption h1{
        font-size:42px;
    }

    .hero-caption p{
        font-size:18px;
    }

    .section-title{
        font-size:36px;
    }

}

</style>

<!-- HERO -->
<div class="swiper heroSwiper hero-slider">

    <div class="swiper-wrapper">

        @foreach($slider as $item)

        <div class="swiper-slide position-relative">

            <div class="hero-overlay"></div>

            <img
            src="{{ asset('uploads/slider/'.$item->gambar) }}"
            alt="{{ $item->judul }}">

            <div class="hero-caption">

                <h1>

                    {{ $item->judul }}

                </h1>

                <p>

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

</div>

<!-- ABOUT -->
<section>

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img
                src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200"
                class="img-fluid rounded-5 shadow-lg">

            </div>

            <div class="col-lg-6">

                <span class="badge bg-warning text-dark px-4 py-2 rounded-pill mb-4">

                    Tentang Yayasan

                </span>

                <h2 class="fw-bold display-4 mb-4">

                    Yayasan Nurul Ma'rifah

                </h2>

                <p class="text-secondary fs-5">

                    Yayasan pendidikan Islam modern yang berkomitmen
                    membangun generasi unggul, berakhlakul karimah,
                    cerdas, kreatif, dan siap menghadapi masa depan.

                </p>

                <div class="row mt-5">

                    <div class="col-6">

                        <div class="shadow rounded-4 p-4 text-center">

                            <h1 class="fw-bold text-warning">
                                1200+
                            </h1>

                            <p class="mb-0 text-secondary">
                                Siswa Aktif
                            </p>

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="shadow rounded-4 p-4 text-center">

                            <h1 class="fw-bold text-warning">
                                80+
                            </h1>

                            <p class="mb-0 text-secondary">
                                Guru Profesional
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

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card school-card shadow-lg h-100">

                    <img
                    src="https://images.unsplash.com/photo-1588072432836-e10032774350"
                    class="card-img-top">

                    <div class="card-body text-center p-4">

                        <h3 class="fw-bold">

                            PAUD

                        </h3>

                        <p class="text-secondary">

                            Pendidikan usia dini dengan metode belajar menyenangkan.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card school-card shadow-lg h-100">

                    <img
                    src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b"
                    class="card-img-top">

                    <div class="card-body text-center p-4">

                        <h3 class="fw-bold">

                            SD

                        </h3>

                        <p class="text-secondary">

                            Pendidikan dasar modern berbasis karakter Islami.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card school-card shadow-lg h-100">

                    <img
                    src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6"
                    class="card-img-top">

                    <div class="card-body text-center p-4">

                        <h3 class="fw-bold">

                            SMP

                        </h3>

                        <p class="text-secondary">

                            Membentuk generasi kreatif dan disiplin.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card school-card shadow-lg h-100">

                    <img
                    src="https://images.unsplash.com/photo-1513258496099-48168024aec0"
                    class="card-img-top">

                    <div class="card-body text-center p-4">

                        <h3 class="fw-bold">

                            SMA

                        </h3>

                        <p class="text-secondary">

                            Menyiapkan siswa unggul menuju masa depan.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- BERITA -->
<section>

    <div class="container">

        <h2 class="section-title">

            Berita Terbaru

        </h2>

        <div class="row g-4">

            @forelse($berita as $item)

            <div class="col-lg-4">

                <div class="card school-card shadow h-100">

                    <img
                    src="{{ asset('uploads/berita/'.$item->thumbnail) }}">

                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-3">

                            {{ $item->judul }}

                        </h4>

                        <a href="/berita/{{ $item->slug }}"
                        class="btn btn-warning rounded-pill px-4">

                            Baca Selengkapnya

                        </a>

                    </div>

                </div>

            </div>

            @empty

            <div class="text-center">

                <h4>

                    Belum ada berita

                </h4>

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

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="feature-box shadow-lg text-center h-100">

                    <i class="fas fa-school fa-4x"></i>

                    <h3 class="fw-bold mb-3">

                        Fasilitas Lengkap

                    </h3>

                    <p class="text-secondary">

                        Ruang belajar nyaman,
                        laboratorium lengkap,
                        dan lingkungan modern.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-box shadow-lg text-center h-100">

                    <i class="fas fa-user-graduate fa-4x"></i>

                    <h3 class="fw-bold mb-3">

                        Guru Profesional

                    </h3>

                    <p class="text-secondary">

                        Tenaga pengajar berkualitas
                        dan berpengalaman.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-box shadow-lg text-center h-100">

                    <i class="fas fa-award fa-4x"></i>

                    <h3 class="fw-bold mb-3">

                        Banyak Prestasi

                    </h3>

                    <p class="text-secondary">

                        Aktif meraih prestasi akademik
                        dan non akademik.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GALERI -->
<section>

    <div class="container">

        <h2 class="section-title">

            Galeri Kegiatan

        </h2>

        <div class="row gallery g-4">

            @foreach($galeri as $item)

            <div class="col-lg-4 col-md-6">

                <div class="overflow-hidden rounded-4 shadow-lg position-relative">

                    <img
                    src="{{ asset('uploads/galeri/'.$item->gambar) }}"
                    class="img-fluid w-100">

                    <div class="position-absolute bottom-0 start-0 w-100 p-4"
                    style="background:rgba(0,0,0,0.6)">

                        <h5 class="text-white fw-bold">

                            {{ $item->judul }}

                        </h5>

                        <small class="text-light">

                            {{ $item->kategori }}

                        </small>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- STATISTIK -->
<section class="bg-light">

    <div class="container">

        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="display-3 fw-bold text-warning">

                    1200+

                </h1>

                <h5>Siswa</h5>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="display-3 fw-bold text-warning">

                    80+

                </h1>

                <h5>Guru</h5>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="display-3 fw-bold text-warning">

                    35+

                </h1>

                <h5>Prestasi</h5>

            </div>

            <div class="col-lg-3 col-md-6 mb-4">

                <h1 class="display-3 fw-bold text-warning">

                    15+

                </h1>

                <h5>Ekstrakurikuler</h5>

            </div>

        </div>

    </div>

</section>

<!-- CTA PPDB -->
<section>

    <div class="container">

        <div class="ppdb-section text-center shadow-lg">

            <h1 class="fw-bold display-4 mb-4">

                Pendaftaran PPDB Dibuka

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