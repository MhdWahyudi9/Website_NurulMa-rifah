<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Yayasan Nurul Ma'rifah</title>

    <meta name="description"
    content="Website resmi Yayasan Nurul Ma'rifah">

    <meta name="keywords"
    content="Sekolah Islam, PAUD, SD, SMP, SMA">

    <!-- GOOGLE FONT -->
    <link rel="preconnect"
    href="https://fonts.googleapis.com">

    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- SWIPER -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- AOS -->
    <link
    href="https://unpkg.com/aos@2.3.4/dist/aos.css"
    rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:'Poppins', sans-serif;
            background:#f8fafc;
            color:#0f172a;
            overflow-x:hidden;
        }

        a{
            text-decoration:none;
        }

        img{
            max-width:100%;
        }

        section{
            padding:110px 0;
        }

        /* ====================================
        GLOBAL
        ==================================== */

        .section-title{
            font-size:52px;
            font-weight:800;
            margin-bottom:20px;
            text-align:center;
            color:#0f172a;
        }

        .section-subtitle{
            max-width:750px;
            margin:auto;
            text-align:center;
            color:#64748b;
            line-height:1.9;
            font-size:18px;
            margin-bottom:70px;
        }

        .btn-custom{
            background:#facc15;
            color:#0f172a;
            border:none;
            padding:15px 38px;
            border-radius:60px;
            font-weight:700;
            transition:0.3s;
        }

        .btn-custom:hover{
            background:#0f172a;
            color:white;
            transform:translateY(-5px);
        }

        /* ====================================
        PAGE HEADER
        ==================================== */

        .page-header{
            padding:170px 0 100px;
            background:linear-gradient(
                135deg,
                #0f172a,
                #1e293b
            );
            color:white;
            position:relative;
            overflow:hidden;
        }

        .page-title{
            font-size:62px;
            font-weight:800;
            margin-bottom:22px;
        }

        .page-subtitle{
            max-width:760px;
            margin:auto;
            color:#cbd5e1;
            line-height:1.9;
            font-size:20px;
        }

        /* ====================================
        NAVBAR
        ==================================== */

        .navbar-custom{
            background:rgba(15,23,42,0.92);
            backdrop-filter:blur(12px);
            padding:14px 0;
            transition:0.3s;
            z-index:999;
        }

        .navbar-custom.scrolled{
            background:#0f172a;
            box-shadow:0 10px 30px rgba(0,0,0,0.12);
        }

        .logo-school{
            width:90px;
            height:90px;
            object-fit:contain;
            margin-right:14px;
        }

        .brand-text{
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .brand-text h5{
            color:white;
            font-size:26px;
            font-weight:800;
            margin:0;
            line-height:1.1;
        }

        .brand-text small{
            color:#cbd5e1;
            font-size:13px;
            margin-top:3px;
            letter-spacing:1px;
        }

        .navbar-nav{
            gap:8px;
        }

        .nav-link{
            color:white !important;
            font-weight:600;
            font-size:15px;
            padding:10px 14px !important;
            border-radius:12px;
            transition:0.3s;
        }

        .nav-link:hover{
            color:#facc15 !important;
            background:rgba(255,255,255,0.05);
        }

        .dropdown-menu{
            border:none;
            border-radius:20px;
            padding:10px;
            box-shadow:0 15px 35px rgba(0,0,0,0.08);
        }

        .dropdown-item{
            padding:12px 16px;
            border-radius:12px;
            transition:0.3s;
            font-weight:500;
        }

        .dropdown-item:hover{
            background:#facc15;
            color:#0f172a;
        }

        .btn-ppdb{
            background:#facc15;
            color:#0f172a;
            border-radius:50px;
            padding:10px 24px;
            font-weight:700;
            transition:0.3s;
        }

        .btn-ppdb:hover{
            background:white;
            transform:translateY(-3px);
        }

        /* ====================================
        HERO
        ==================================== */

        .hero-slider{
            width:100%;
            height:100vh;
            position:relative;
        }

        .hero-slider img{
            width:100%;
            height:100vh;
            object-fit:cover;
        }

        .hero-overlay{
            position:absolute;
            inset:0;

            background:
            linear-gradient(
                to right,
                rgba(15,23,42,0.92),
                rgba(15,23,42,0.45)
            );

            z-index:1;
        }

        .hero-caption{
            position:absolute;
            top:50%;
            left:10%;
            transform:translateY(-50%);
            z-index:10;
            color:white;
            max-width:760px;
        }

        .hero-badge{
            display:inline-block;
            background:rgba(255,255,255,0.15);
            backdrop-filter:blur(10px);
            padding:12px 24px;
            border-radius:50px;
            margin-bottom:25px;
            font-weight:600;
            letter-spacing:1px;
        }

        .hero-caption h1{
            font-size:74px;
            font-weight:800;
            line-height:1.2;
            margin-bottom:28px;
        }

        .hero-caption p{
            font-size:22px;
            line-height:1.9;
            margin-bottom:40px;
            color:#e2e8f0;
        }

        .btn-hero{
            background:#facc15;
            color:#0f172a;
            border:none;
            padding:16px 42px;
            border-radius:60px;
            font-weight:700;
            transition:0.3s;
            box-shadow:0 10px 30px rgba(250,204,21,0.35);
        }

        .btn-hero:hover{
            background:white;
            transform:translateY(-5px);
        }

        /* ====================================
        CARD SEKOLAH
        ==================================== */

        .school-card{
            background:white;
            border:none;
            border-radius:30px;
            overflow:hidden;
            height:100%;
            transition:0.4s;
            box-shadow:0 10px 40px rgba(0,0,0,0.05);
        }

        .school-card:hover{
            transform:translateY(-12px);
        }

        .school-card img{
            width:100%;
            height:260px;
            object-fit:cover;
        }

        .school-card .card-body{
            padding:30px;
        }

        .school-card h4{
            font-weight:700;
            margin-bottom:15px;
        }

        .school-card p{
            color:#64748b;
            line-height:1.8;
        }

        /* ====================================
        MODERN CARD
        ==================================== */

        .modern-card{
            background:white;
            border-radius:30px;
            overflow:hidden;
            transition:0.4s;
            height:100%;
            box-shadow:0 10px 35px rgba(0,0,0,0.06);
        }

        .modern-card:hover{
            transform:translateY(-10px);
        }

        .modern-image{
            overflow:hidden;
            position:relative;
        }

        .modern-image img{
            width:100%;
            height:260px;
            object-fit:cover;
            transition:0.4s;
        }

        .modern-card:hover img{
            transform:scale(1.08);
        }

        .modern-content{
            padding:30px;
        }

        .modern-content h4{
            font-size:24px;
            font-weight:700;
            margin-bottom:18px;
        }

        .modern-description{
            color:#64748b;
            line-height:1.9;
        }

        /* ====================================
        FEATURE
        ==================================== */

        .feature-box{
            background:white;
            border-radius:30px;
            padding:50px 35px;
            text-align:center;
            height:100%;
            transition:0.3s;
            box-shadow:0 10px 35px rgba(0,0,0,0.05);
        }

        .feature-box:hover{
            transform:translateY(-10px);
        }

        .feature-box i{
            color:#facc15;
            margin-bottom:28px;
        }

        .feature-box h4{
            font-weight:700;
            margin-bottom:18px;
        }

        .feature-box p{
            color:#64748b;
            line-height:1.9;
        }

        /* ====================================
        GALLERY
        ==================================== */

        .gallery-card{
            position:relative;
            overflow:hidden;
            border-radius:28px;
            height:320px;
        }

        .gallery-card img{
            width:100%;
            height:100%;
            object-fit:cover;
            transition:0.5s;
        }

        .gallery-card:hover img{
            transform:scale(1.1);
        }

        .gallery-overlay{
            position:absolute;
            inset:0;
            background:linear-gradient(
                to top,
                rgba(0,0,0,0.85),
                rgba(0,0,0,0.1)
            );

            display:flex;
            flex-direction:column;
            justify-content:end;

            padding:30px;
            color:white;
        }

        .gallery-overlay h4{
            font-weight:700;
            margin-bottom:10px;
        }

        .gallery-overlay span{
            color:#facc15;
        }

        /* ====================================
        ABOUT STAT
        ==================================== */

        .about-stat{
            background:white;
            padding:35px 20px;
            border-radius:28px;
            text-align:center;
            box-shadow:0 10px 35px rgba(0,0,0,0.05);
        }

        .about-stat h1{
            font-size:54px;
            font-weight:800;
            color:#facc15;
            margin-bottom:10px;
        }

        .about-stat p{
            color:#64748b;
            margin:0;
            font-weight:600;
        }

        /* ====================================
        STAT BOX
        ==================================== */

        .stat-box{
            background:white;
            border-radius:30px;
            padding:50px 20px;
            transition:0.3s;
            box-shadow:0 10px 35px rgba(0,0,0,0.05);
        }

        .stat-box:hover{
            transform:translateY(-10px);
        }

        .stat-box h1{
            font-size:64px;
            font-weight:800;
            color:#facc15;
        }

        .stat-box p{
            color:#64748b;
            font-weight:600;
            font-size:18px;
            margin:0;
        }

        /* ====================================
        PPDB CTA
        ==================================== */

        .ppdb-section{
            background:linear-gradient(
                135deg,
                #facc15,
                #f59e0b
            );

            padding:90px 50px;
            border-radius:40px;
            color:#0f172a;
        }

        /* ====================================
        FORM
        ==================================== */

        .form-modern{
            border-radius:18px;
            padding:14px 18px;
            border:1px solid #e2e8f0;
            min-height:55px;
            box-shadow:none !important;
        }

        .form-modern:focus{
            border-color:#facc15;
        }

        /* ====================================
        CONTACT
        ==================================== */

        .contact-item{
            display:flex;
            gap:20px;
            margin-bottom:35px;
        }

        .contact-item i{
            width:60px;
            height:60px;
            background:#facc15;
            color:#0f172a;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:22px;
        }

        .contact-item h5{
            font-weight:700;
            margin-bottom:8px;
        }

        .contact-item p{
            color:#64748b;
            margin:0;
        }

        /* ====================================
        FOOTER
        ==================================== */

        footer{
            background:#0f172a;
            color:white;
            padding:90px 0 40px;
        }

        footer h4{
            font-weight:700;
            margin-bottom:25px;
        }

        footer p{
            color:#cbd5e1;
            line-height:1.9;
        }

        footer a{
            color:#cbd5e1;
            transition:0.3s;
        }

        footer a:hover{
            color:#facc15;
        }

        .footer-social i{
            width:52px;
            height:52px;
            background:#1e293b;
            border-radius:50%;
            text-align:center;
            line-height:52px;
            transition:0.3s;
            cursor:pointer;
            margin-right:10px;
        }

        .footer-social i:hover{
            background:#facc15;
            color:#0f172a;
            transform:translateY(-5px);
        }

        /* ====================================
        WHATSAPP
        ==================================== */

        .wa-float{
            position:fixed;
            width:65px;
            height:65px;
            bottom:30px;
            right:30px;
            background:#25d366;
            color:white;
            border-radius:50%;
            text-align:center;
            line-height:65px;
            font-size:32px;
            z-index:999;
            box-shadow:0 10px 30px rgba(0,0,0,0.18);
            transition:0.3s;
        }

        .wa-float:hover{
            transform:scale(1.1);
            color:white;
        }

        /* ====================================
        RESPONSIVE
        ==================================== */

        @media(max-width:991px){

            .navbar-collapse{
                background:#0f172a;
                padding:25px;
                border-radius:24px;
                margin-top:20px;
            }

            .hero-caption{
                left:6%;
                right:6%;
            }

            .hero-caption h1{
                font-size:54px;
            }

        }

        @media(max-width:768px){

            section{
                padding:80px 0;
            }

            .page-title{
                font-size:42px;
            }

            .page-subtitle{
                font-size:18px;
            }

            .section-title{
                font-size:34px;
            }

            .hero-caption h1{
                font-size:42px;
            }

            .hero-caption p{
                font-size:18px;
            }

            .hero-slider,
            .hero-slider img{
                height:90vh;
            }

            .brand-text h5{
                font-size:20px;
            }

            .brand-text small{
                font-size:12px;
            }

            .logo-school{
                width:80px;
                height:80px;
            }

            .ppdb-section{
                padding:60px 30px;
            }

        }

    </style>

</head>

<body>

    <!-- NAVBAR -->
    @include('frontend.layouts.navbar')

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    @include('frontend.layouts.footer')

    <!-- FLOATING WHATSAPP -->
    <a href="https://wa.me/6285839102737"
    target="_blank"
    class="wa-float">

        <i class="fab fa-whatsapp"></i>

    </a>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SWIPER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        // AOS
        AOS.init({
            duration:1000,
            once:true
        });

        // HERO SLIDER
        new Swiper(".heroSwiper", {

            loop:true,

            autoplay:{
                delay:4000,
                disableOnInteraction:false,
            },

            pagination:{
                el:".swiper-pagination",
                clickable:true,
            },

        });

        // NAVBAR SCROLL
        window.addEventListener('scroll', function(){

            const navbar =
            document.querySelector('.navbar-custom');

            navbar.classList.toggle(
                'scrolled',
                window.scrollY > 50
            );

        });

    </script>

</body>
</html>