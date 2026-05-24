@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h1 class="page-title mb-1">

            Dashboard Admin

        </h1>

        <p class="text-secondary mb-0">

            Selamat datang di panel admin Yayasan Nurul Ma'rifah

        </p>

    </div>

</div>

<div class="row g-4">

    <!-- BERITA -->
    <div class="col-lg-3 col-md-6">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-primary text-white">

                <i class="fas fa-newspaper"></i>

            </div>

            <div class="dashboard-title">

                Total Berita

            </div>

            <div class="dashboard-value">

                {{ $totalBerita }}

            </div>

        </div>

    </div>

    <!-- GALERI -->
    <div class="col-lg-3 col-md-6">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-success text-white">

                <i class="fas fa-images"></i>

            </div>

            <div class="dashboard-title">

                Total Galeri

            </div>

            <div class="dashboard-value">

                {{ $totalGaleri }}

            </div>

        </div>

    </div>

    <!-- PPDB -->
    <div class="col-lg-3 col-md-6">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-warning text-dark">

                <i class="fas fa-user-graduate"></i>

            </div>

            <div class="dashboard-title">

                Total PPDB

            </div>

            <div class="dashboard-value">

                {{ $totalPPDB }}

            </div>

        </div>

    </div>

    <!-- VISITOR -->
    <div class="col-lg-3 col-md-6">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-danger text-white">

                <i class="fas fa-eye"></i>

            </div>

            <div class="dashboard-title">

                Total Visitor

            </div>

            <div class="dashboard-value">

                {{ $totalVisitor }}

            </div>

        </div>

    </div>

</div>

<!-- WELCOME -->
<div class="card-admin mt-5">

    <div class="row align-items-center">

        <div class="col-lg-8">

            <h3 class="fw-bold mb-3">

                Selamat Datang 👋

            </h3>

            <p class="text-secondary mb-0">

                Kelola seluruh website Yayasan Nurul Ma'rifah
                melalui dashboard admin ini.
                Anda dapat mengatur berita, galeri,
                event, prestasi, fasilitas,
                dan berbagai informasi sekolah lainnya.

            </p>

        </div>

        <div class="col-lg-4 text-center">

            <img
            src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
            width="180">

        </div>

    </div>

</div>

@endsection