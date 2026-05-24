@extends('frontend.layouts.app')

@section('content')

<style>

    .detail-hero{
        background:linear-gradient(135deg,#0f172a,#1e293b);
        padding:100px 0;
        position:relative;
        overflow:hidden;
    }

    .detail-hero::before{
        content:'';
        position:absolute;
        width:400px;
        height:400px;
        background:rgba(255,255,255,0.05);
        border-radius:50%;
        top:-100px;
        right:-100px;
    }

    .detail-badge{
        background:#facc15;
        color:#111827;
        padding:10px 20px;
        border-radius:999px;
        display:inline-block;
        font-weight:700;
        margin-bottom:25px;
    }

    .detail-title{
        font-size:3rem;
        color:white;
        font-weight:800;
        line-height:1.3;
    }

    .detail-level{
        color:#facc15;
        margin-top:20px;
        font-size:1.2rem;
        font-weight:700;
    }

    .detail-card{
        background:white;
        border-radius:30px;
        overflow:hidden;
        margin-top:-70px;
        position:relative;
        z-index:10;
        box-shadow:0 15px 40px rgba(0,0,0,0.08);
    }

    .detail-image{
        width:100%;
        height:500px;
        object-fit:cover;
    }

    .detail-content{
        padding:50px;
    }

    .detail-desc{
        color:#475569;
        line-height:2;
        font-size:1.05rem;
    }

    .btn-back{
        background:#facc15;
        color:#111827;
        padding:13px 28px;
        border-radius:999px;
        text-decoration:none;
        display:inline-block;
        margin-top:40px;
        font-weight:700;
        transition:0.3s;
    }

    .btn-back:hover{
        background:#eab308;
        color:black;
    }

</style>

<section class="detail-hero">

    <div class="container text-center">

        <span class="detail-badge">

            {{ $prestasi->tahun }}

        </span>

        <h1 class="detail-title">

            {{ $prestasi->nama_prestasi }}

        </h1>

        <div class="detail-level">

            <i class="bi bi-award-fill"></i>

            {{ $prestasi->tingkat }}

        </div>

    </div>

</section>

<section class="pb-5 bg-light">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="detail-card">

                    <img
                    src="{{ asset('uploads/prestasi/'.$prestasi->foto) }}"
                    class="detail-image">

                    <div class="detail-content">

                        <div class="detail-desc">

                            {!! nl2br(e($prestasi->deskripsi)) !!}

                        </div>

                        <a href="/prestasi"
                        class="btn-back">

                            ← Kembali ke Prestasi

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection