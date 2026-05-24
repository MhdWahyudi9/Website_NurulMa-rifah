@extends('frontend.layouts.app')

@section('content')

<section class="page-header">

    <div class="container text-center">

        <h1 class="page-title">

            Kontak Kami

        </h1>

        <p class="page-subtitle">

            Hubungi Yayasan Nurul Ma'rifah
            untuk informasi lebih lanjut

        </p>

    </div>

</section>

<section class="py-5">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">

                <div class="bg-white shadow-lg rounded-5 p-5 h-100">

                    <h3 class="fw-bold mb-4">

                        Informasi Kontak

                    </h3>

                    <div class="contact-item">

                        <i class="fas fa-map-marker-alt"></i>

                        <div>

                            <h5>Alamat</h5>

                            <p>
                                Palembang, Sumatera Selatan
                            </p>

                        </div>

                    </div>

                    <div class="contact-item">

                        <i class="fas fa-phone"></i>

                        <div>

                            <h5>Telepon</h5>

                            <p>
                                085839102737
                            </p>

                        </div>

                    </div>

                    <div class="contact-item">

                        <i class="fas fa-envelope"></i>

                        <div>

                            <h5>Email</h5>

                            <p>
                                admin@nurulmarifah.sch.id
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="bg-white shadow-lg rounded-5 p-5">

                    <h3 class="fw-bold mb-4">

                        Kirim Pesan

                    </h3>

                    <form>

                        <div class="row g-4">

                            <div class="col-md-6">

                                <input
                                type="text"
                                class="form-control form-modern"
                                placeholder="Nama Lengkap">

                            </div>

                            <div class="col-md-6">

                                <input
                                type="email"
                                class="form-control form-modern"
                                placeholder="Email">

                            </div>

                            <div class="col-12">

                                <input
                                type="text"
                                class="form-control form-modern"
                                placeholder="Subjek">

                            </div>

                            <div class="col-12">

                                <textarea
                                rows="6"
                                class="form-control form-modern"
                                placeholder="Pesan"></textarea>

                            </div>

                            <div class="col-12">

                                <button
                                class="btn btn-warning btn-lg rounded-pill px-5">

                                    Kirim Pesan

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