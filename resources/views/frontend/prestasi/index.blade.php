@extends('frontend.layouts.app')

@section('content')

<style>

    .prestasi-hero{
        background:linear-gradient(135deg,#0f172a,#1e293b);
        padding:120px 0 90px;
        position:relative;
        overflow:hidden;
    }

    .prestasi-hero::before{
        content:'';
        position:absolute;
        width:500px;
        height:500px;
        background:rgba(255,255,255,0.05);
        border-radius:50%;
        top:-200px;
        right:-150px;
    }

    .prestasi-title{
        font-size:3rem;
        font-weight:800;
        color:white;
    }

    .prestasi-subtitle{
        color:#cbd5e1;
        max-width:700px;
        margin:auto;
        font-size:1.1rem;
    }

    .prestasi-card{
        background:white;
        border-radius:30px;
        overflow:hidden;
        transition:0.4s;
        box-shadow:0 10px 35px rgba(0,0,0,0.08);
        height:100%;
        position:relative;
    }

    .prestasi-card:hover{
        transform:translateY(-12px);
        box-shadow:0 20px 50px rgba(0,0,0,0.15);
    }

    .prestasi-image{
        height:280px;
        overflow:hidden;
        position:relative;
    }

    .prestasi-image img{
        width:100%;
        height:100%;
        object-fit:cover;
        transition:0.5s;
    }

    .prestasi-card:hover img{
        transform:scale(1.1);
    }

    .prestasi-overlay{
        position:absolute;
        inset:0;
        background:linear-gradient(to top, rgba(0,0,0,0.7), transparent);
    }

    .prestasi-year{
        position:absolute;
        top:20px;
        left:20px;
        background:#facc15;
        color:#111827;
        padding:10px 18px;
        border-radius:999px;
        font-weight:700;
        z-index:2;
    }

    .prestasi-content{
        padding:30px;
    }

    .prestasi-level{
        color:#f59e0b;
        font-weight:700;
        margin-bottom:15px;
    }

    .prestasi-heading{
        font-size:1.4rem;
        font-weight:800;
        line-height:1.5;
        margin-bottom:15px;
        color:#0f172a;
    }

    .prestasi-desc{
        color:#64748b;
        line-height:1.8;
    }

    .btn-detail{
        background:#facc15;
        color:#111827;
        padding:12px 25px;
        border-radius:999px;
        text-decoration:none;
        font-weight:700;
        display:inline-block;
        margin-top:20px;
        transition:0.3s;
    }

    .btn-detail:hover{
        background:#eab308;
        color:black;
    }

</style>

<section class="prestasi-hero">

    <div class="container text-center">

        <h1 class="prestasi-title">
            Prestasi Sekolah
        </h1>

        <p class="prestasi-subtitle">

            Berbagai pencapaian membanggakan siswa
            dan sekolah Yayasan Nurul Ma'rifah
            di tingkat daerah hingga nasional

        </p>

    </div>

</section>

<section class="py-5 bg-light">

    <div class="container">

        <div class="row g-4">

            @forelse($prestasi as $item)

            <div class="col-lg-4 col-md-6">

                <div class="prestasi-card">

                    <div class="prestasi-image">

                        <span class="prestasi-year">

                            {{ $item->tahun }}

                        </span>

                        <div class="prestasi-overlay"></div>

                        <img
                        src="{{ asset('uploads/prestasi/'.$item->foto) }}"
                        alt="{{ $item->nama_prestasi }}">

                    </div>

                    <div class="prestasi-content">

                        <div class="prestasi-level">

                            <i class="bi bi-trophy-fill"></i>

                            {{ $item->tingkat }}

                        </div>

                        <h3 class="prestasi-heading">

                            {{ $item->nama_prestasi }}

                        </h3>

                        <p class="prestasi-desc">

                            {{ Str::limit($item->deskripsi,120) }}

                        </p>

                        <a href="/prestasi/{{ $item->id }}"
                        class="btn-detail">

                            Detail Prestasi

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

                    Belum Ada Prestasi

                </h3>

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection