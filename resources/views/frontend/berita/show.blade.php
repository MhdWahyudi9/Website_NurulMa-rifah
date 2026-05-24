@extends('frontend.layouts.app')

@section('content')

<style>

    .detail-hero{
        background:linear-gradient(135deg,#0f172a,#1e293b);
        padding:100px 0;
    }

    .detail-badge{
        background:#facc15;
        color:#111827;
        padding:10px 20px;
        border-radius:999px;
        font-weight:700;
        display:inline-block;
        margin-bottom:20px;
    }

    .detail-title{
        font-size:3rem;
        font-weight:800;
        color:white;
        line-height:1.3;
    }

    .detail-date{
        color:#cbd5e1;
        margin-top:20px;
    }

    .detail-card{
        background:white;
        border-radius:30px;
        overflow:hidden;
        box-shadow:0 10px 40px rgba(0,0,0,0.08);
        margin-top:-70px;
        position:relative;
        z-index:10;
    }

    .detail-image{
        width:100%;
        height:500px;
        object-fit:cover;
    }

    .detail-content{
        padding:50px;
        line-height:2;
        color:#475569;
        font-size:1.05rem;
    }

    .sidebar-card{
        background:white;
        border-radius:25px;
        padding:30px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
    }

    .latest-item{
        display:flex;
        gap:15px;
        margin-bottom:25px;
        transition:0.3s;
    }

    .latest-item:hover{
        transform:translateX(5px);
    }

    .latest-item img{
        width:100px;
        height:80px;
        object-fit:cover;
        border-radius:15px;
    }

    .latest-title{
        font-size:0.95rem;
        font-weight:700;
        color:#0f172a;
        line-height:1.5;
    }

</style>

<section class="detail-hero">

    <div class="container text-center">

        <span class="detail-badge">
            Berita Sekolah
        </span>

        <h1 class="detail-title">

            {{ $berita->judul }}

        </h1>

        <div class="detail-date">

            {{ $berita->created_at->translatedFormat('d F Y') }}

        </div>

    </div>

</section>

<section class="pb-5 bg-light">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-8">

                <div class="detail-card">

                    <img
                    src="{{ asset('uploads/berita/'.$berita->thumbnail) }}"
                    class="detail-image">

                    <div class="detail-content">

                        {!! $berita->isi !!}

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="sidebar-card">

                    <h4 class="fw-bold mb-4">
                        Berita Terbaru
                    </h4>

                    @foreach($beritaTerbaru as $item)

                    <a href="/berita/{{ $item->slug }}"
                    class="text-decoration-none">

                        <div class="latest-item">

                            <img
                            src="{{ asset('uploads/berita/'.$item->thumbnail) }}">

                            <div>

                                <div class="latest-title">

                                    {{ Str::limit($item->judul,55) }}

                                </div>

                                <small class="text-muted">

                                    {{ $item->created_at->translatedFormat('d M Y') }}

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