@extends('admin.layouts.app')

@section('content')

<h1 class="page-title">

    Dashboard

</h1>

<div class="row g-4">

    <div class="col-lg-3">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-primary text-white">

                <i class="fas fa-newspaper"></i>

            </div>

            <div class="dashboard-title">
                Total Berita
            </div>

            <div class="dashboard-value">

                12

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-success text-white">

                <i class="fas fa-images"></i>

            </div>

            <div class="dashboard-title">
                Total Galeri
            </div>

            <div class="dashboard-value">

                25

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-warning text-dark">

                <i class="fas fa-user-graduate"></i>

            </div>

            <div class="dashboard-title">
                PPDB
            </div>

            <div class="dashboard-value">

                50

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="dashboard-card">

            <div class="dashboard-icon bg-danger text-white">

                <i class="fas fa-eye"></i>

            </div>

            <div class="dashboard-title">
                Visitors
            </div>

            <div class="dashboard-value">

                1.2K

            </div>

        </div>

    </div>

</div>

<div class="card-admin mt-4">

    <h4 class="mb-4">

        Selamat Datang di Admin Panel

    </h4>

    <p style="color:#64748b">

        Kelola website Yayasan Nurul Ma'rifah dengan mudah melalui dashboard admin ini.

    </p>

</div>

@endsection