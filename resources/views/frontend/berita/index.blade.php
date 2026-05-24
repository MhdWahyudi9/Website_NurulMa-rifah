@extends('frontend.layouts.app')

@section('content')

<style>

    .news-hero{
        background: linear-gradient(135deg,#0f172a,#1e293b);
        padding: 120px 0 90px;
        position: relative;
        overflow: hidden;
    }

    .news-hero::before{
        content:'';
        position:absolute;
        width:400px;
        height:400px;
        background:rgba(255,255,255,0.05);
        border-radius:50%;
        top:-100px;
        right:-100px;
    }

    .news-title{
        font-size:3rem;
        font-weight:800;
        color:white;
    }

    .news-subtitle{
        color:#cbd5e1;
        font-size:1.1rem;
        max-width:700px;
        margin:auto;
    }

    .news-card{
        background:white;
        border-radius:28px;
        overflow:hidden;
        transition:0.4s;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
        height:100%;
        position:relative;
    }

    .news-card:hover{
        transform:translateY(-10px);
        box-shadow:0 20px 50px rgba(0,0,0,0.15);
    }

    .news-image{
        position:relative;
        overflow:hidden;
        height:260px;
    }

    .news-image img{
        width:100%;
        height:100%;
        object-fit:cover;
        transition:0.5s;
    }

    .news-card:hover .news-image img{
        transform:scale(1.1);
    }

    .news-overlay{
        position:absolute;
        inset:0;
        background:linear-gradient(to top, rgba(0,0,0,0.7), transparent);
    }

    .news-category{
        position:absolute;
        top:20px;
        left:20px;
        background:#facc15;
        color:#111827;
        padding:8px 18px;
        border-radius:999px;
        font-weight:700;
        font-size:0.85rem;
        z-index:2;
    }

    .news-content{
        padding:30px;
    }

    .news-date{
        color:#64748b;
        font-size:0.9rem;
        margin-bottom:15px;
    }

    .news-heading{
        font-size:1.4rem;
        font-weight:800;
        margin-bottom:15px;
        line-height:1.5;
        color:#0f172a;
    }

    .news-desc{
        color:#64748b;
        line-height:1.8;
    }

    .btn-news{
        background:#facc15;
        border:none;
        padding:12px 25px;
        border-radius:999px;
        font-weight:700;
        transition:0.3s;
        text-decoration:none;
        color:#111827;
        display:inline-block;
        margin-top:20px;
    }

    .btn-news:hover{
        background:#eab308;
        color:black;
    }

</style>

<section class="news-hero">

    <div class="container text-center">

        <h1 class="news-title">
            Berita Yayasan
        </h1>

        <p class="news-subtitle">
            Informasi terbaru mengenai kegiatan, prestasi,
            event, dan perkembangan pendidikan
            Yayasan Nurul Ma'rifah
        </p>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="row g-4">

            @forelse($berita as $item)

            <div class="col-lg-4 col-md-6"data-aos="fade-up">

                <div class="news-card">

                    <div class="news-image">

                        <span class="news-category">
                            Berita Sekolah
                        </span>

                        <div class="news-overlay"></div>

                        <img
                        src="{{ asset('uploads/berita/'.$item->thumbnail) }}"
                        alt="{{ $item->judul }}">

                    </div>

                    <div class="news-content">

                        <div class="news-date">

                            <i class="bi bi-calendar-event"></i>

                            {{ $item->created_at->translatedFormat('d F Y') }}

                        </div>

                        <h3 class="news-heading">

                            {{ Str::limit($item->judul,70) }}

                        </h3>

                        <p class="news-desc">

                            {{ Str::limit(strip_tags($item->isi),130) }}

                        </p>

                        <a href="/berita/{{ $item->slug }}"
                        class="btn-news">

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

@endsection