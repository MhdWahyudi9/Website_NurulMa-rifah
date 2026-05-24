@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            PPDB Online

        </h1>

        <p class="page-subtitle">

            Pendaftaran Peserta Didik Baru
            Yayasan Nurul Ma'rifah

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5">

                <img
                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200"
                class="img-fluid rounded-5 shadow-lg">

            </div>

            <div class="col-lg-7">

                <div class="bg-white shadow-lg rounded-5 p-5">

                    <h2 class="fw-bold mb-4">

                        Formulir Pendaftaran

                    </h2>

                    <form action="/ppdb/store" method="POST">

                        @csrf

                        <div class="row g-4">

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">

                                    Nama Lengkap

                                </label>

                                <input
                                type="text"
                                name="nama"
                                class="form-control form-modern"
                                required>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">

                                    Jenjang

                                </label>

                                <select
                                name="jenjang"
                                class="form-select form-modern"
                                required>

                                    <option value="">
                                        Pilih Jenjang
                                    </option>

                                    <option>
                                        PAUD
                                    </option>

                                    <option>
                                        SD
                                    </option>

                                    <option>
                                        SMP
                                    </option>

                                    <option>
                                        SMA
                                    </option>

                                </select>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">

                                    Nomor HP

                                </label>

                                <input
                                type="text"
                                name="no_hp"
                                class="form-control form-modern"
                                required>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label fw-semibold">

                                    Email

                                </label>

                                <input
                                type="email"
                                name="email"
                                class="form-control form-modern">

                            </div>

                            <div class="col-12">

                                <label class="form-label fw-semibold">

                                    Alamat

                                </label>

                                <textarea
                                name="alamat"
                                rows="5"
                                class="form-control form-modern"
                                required></textarea>

                            </div>

                            <div class="col-12">

                                <button
                                class="btn btn-warning btn-lg rounded-pill px-5">

                                    Kirim Pendaftaran

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection