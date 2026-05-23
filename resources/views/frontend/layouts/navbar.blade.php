<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="/">

            <img
            src="{{ asset('images/logo.png') }}"
            alt="Logo"
            width="45"
            class="me-2">

            <div>

                <div class="fw-bold">
                    Yayasan Nurul Ma'rifah
                </div>

                <small style="font-size:12px; color:#cbd5e1;">
                    PAUD • SD • SMP • SMA
                </small>

            </div>

        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler border-0 shadow-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        Home
                    </a>
                </li>

                <!-- DROPDOWN PROFIL -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    id="profilDropdown"
                    role="button"
                    data-bs-toggle="dropdown">

                        Profil

                    </a>

                    <ul class="dropdown-menu border-0 shadow rounded-4">

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

                        <li>
                            <a class="dropdown-item"
                            href="/struktur-organisasi">

                                Struktur Organisasi

                            </a>
                        </li>

                    </ul>

                </li>

                <!-- DROPDOWN SEKOLAH -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    id="sekolahDropdown"
                    role="button"
                    data-bs-toggle="dropdown">

                        Unit Sekolah

                    </a>

                    <ul class="dropdown-menu border-0 shadow rounded-4">

                        <li>
                            <a class="dropdown-item" href="/paud">
                                PAUD
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/sd">
                                SD
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/smp">
                                SMP
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/sma">
                                SMA
                            </a>
                        </li>

                    </ul>

                </li>

                <!-- MENU -->
                <li class="nav-item">
                    <a class="nav-link" href="/berita">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/galeri">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/prestasi">
                        Prestasi
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/event">
                        Event
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kontak">
                        Kontak
                    </a>
                </li>

                <!-- BUTTON PPDB -->
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

                    <a href="/ppdb"
                    class="btn btn-warning rounded-pill px-4 fw-semibold">

                        PPDB

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>