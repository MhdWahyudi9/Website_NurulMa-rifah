<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Logo Sekolah"
                class="logo-school">

            <div class="brand-text">
                <h5>Yayasan Nurul Ma'rifah</h5>
                <small>PAUD • SD • SMP • SMA</small>
            </div>
        </a>

        <!-- TOGGLER -->
        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                    href="/">

                        Beranda

                    </a>
                </li>

                <!-- PROFIL -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    data-bs-toggle="dropdown">

                        Profil

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                            href="/profil">

                                Tentang Yayasan

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/visi-misi">

                                Visi & Misi

                            </a>
                        </li>

                    </ul>

                </li>

                <!-- UNIT -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    data-bs-toggle="dropdown">

                        Unit Sekolah

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                            href="/sekolah/paud">

                                PAUD

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/sekolah/sd">

                                SD

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/sekolah/smp">

                                SMP

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/sekolah/sma">

                                SMA

                            </a>
                        </li>

                    </ul>

                </li>

                <!-- INFORMASI -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    data-bs-toggle="dropdown">

                        Informasi

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                            href="/berita">

                                Berita

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/prestasi">

                                Prestasi

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/event">

                                Event

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/pengumuman">

                                Pengumuman

                            </a>
                        </li>

                    </ul>

                </li>

                <!-- AKTIVITAS -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    data-bs-toggle="dropdown">

                        Aktivitas

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                            href="/galeri">

                                Galeri

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/ekstrakurikuler">

                                Ekskul

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/fasilitas">

                                Fasilitas

                            </a>
                        </li>

                    </ul>

                </li>

                <!-- KONTAK -->
                <li class="nav-item">
                    <a class="nav-link"
                    href="/kontak">

                        Kontak

                    </a>
                </li>

                <!-- BUTTON -->
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

                    <a href="/login"
                    class="btn btn-admin">

                        Admin

                    </a>

                </li>

                <li class="nav-item ms-lg-2 mt-3 mt-lg-0">

                    <a href="/ppdb"
                    class="btn btn-ppdb">

                        PPDB

                    </a>

                </li>

            </ul>

        </div>

    </div>
</nav>