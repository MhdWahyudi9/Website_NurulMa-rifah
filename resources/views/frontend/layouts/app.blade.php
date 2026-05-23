<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yayasan Nurul Ma'rifah</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- SWIPER -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

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
            font-family:'Poppins',sans-serif;
            overflow-x:hidden;
            background:#f8fafc;
        }

        a{
            text-decoration:none;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar-custom{
            background:rgba(15,23,42,0.95);
            backdrop-filter:blur(10px);
            padding:18px 0;
            transition:0.3s;
        }

        .navbar-brand{
            font-size:28px;
            font-weight:700;
            color:white !important;
        }

        .nav-link{
            color:white !important;
            font-weight:500;
            margin-left:18px;
            transition:0.3s;
            position:relative;
        }

        .nav-link:hover{
            color:#facc15 !important;
        }

        .nav-link::after{
            content:'';
            position:absolute;
            width:0%;
            height:2px;
            background:#facc15;
            left:0;
            bottom:-5px;
            transition:0.3s;
        }

        .nav-link:hover::after{
            width:100%;
        }

        .dropdown-menu{
            border:none;
            border-radius:15px;
            padding:15px;
        }

        .dropdown-item{
            padding:10px 15px;
            border-radius:10px;
            transition:0.3s;
        }

        .dropdown-item:hover{
            background:#facc15;
            color:#0f172a;
        }

        /* =========================
           HERO
        ========================= */

        .hero-slider{
            width:100%;
            height:100vh;
        }

        .hero-slider img{
            width:100%;
            height:100vh;
            object-fit:cover;
        }

        .hero-overlay{
            position:absolute;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.55);
            top:0;
            left:0;
            z-index:1;
        }

        .hero-caption{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            z-index:10;
            text-align:center;
            color:white;
            width:100%;
            padding:20px;
        }

        .hero-caption h1{
            font-size:72px;
            font-weight:800;
            margin-bottom:20px;
            line-height:1.2;
        }

        .hero-caption p{
            font-size:22px;
            margin-bottom:30px;
            font-weight:300;
        }

        .btn-hero{
            background:#facc15;
            color:#0f172a;
            border:none;
            padding:15px 40px;
            border-radius:50px;
            font-weight:600;
            transition:0.3s;
            font-size:18px;
        }

        .btn-hero:hover{
            background:white;
            transform:translateY(-5px);
        }

        /* =========================
           SECTION
        ========================= */

        section{
            padding:100px 0;
        }

        .section-title{
            font-size:42px;
            font-weight:700;
            text-align:center;
            margin-bottom:60px;
            color:#0f172a;
        }

        /* =========================
           CARD
        ========================= */

        .school-card{
            border:none;
            border-radius:25px;
            overflow:hidden;
            transition:0.4s;
            background:white;
        }

        .school-card img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .school-card:hover{
            transform:translateY(-10px);
        }

        .school-card .card-body{
            padding:30px;
        }

        .school-card h4{
            font-weight:700;
            color:#0f172a;
            margin-bottom:15px;
        }

        .school-card p{
            color:#64748b;
        }

        /* =========================
           FEATURE BOX
        ========================= */

        .feature-box{
            background:white;
            border-radius:25px;
            padding:40px 30px;
            transition:0.3s;
            height:100%;
        }

        .feature-box:hover{
            transform:translateY(-10px);
        }

        .feature-box i{
            color:#facc15;
            margin-bottom:25px;
        }

        .feature-box h4{
            font-weight:700;
            margin-bottom:20px;
            color:#0f172a;
        }

        .feature-box p{
            color:#64748b;
        }

        /* =========================
           GALLERY
        ========================= */

        .gallery img{
            width:100%;
            height:300px;
            object-fit:cover;
            border-radius:20px;
            transition:0.4s;
        }

        .gallery img:hover{
            transform:scale(1.05);
        }

        /* =========================
           FOOTER
        ========================= */

        footer{
            background:#0f172a;
            color:white;
            padding:80px 0 40px;
        }

        footer h4{
            font-weight:700;
            margin-bottom:25px;
        }

        footer p{
            color:#cbd5e1;
            line-height:1.8;
        }

        .footer-social i{
            width:50px;
            height:50px;
            background:#1e293b;
            border-radius:50%;
            text-align:center;
            line-height:50px;
            transition:0.3s;
            cursor:pointer;
        }

        .footer-social i:hover{
            background:#facc15;
            color:#0f172a;
            transform:translateY(-5px);
        }

        /* =========================
           WHATSAPP
        ========================= */

        .wa-float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:30px;
            right:30px;
            background:#25d366;
            color:white;
            border-radius:50%;
            text-align:center;
            line-height:60px;
            font-size:30px;
            z-index:999;
            box-shadow:0 5px 20px rgba(0,0,0,0.2);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:768px){

            .hero-caption h1{
                font-size:42px;
            }

            .hero-caption p{
                font-size:18px;
            }

            .section-title{
                font-size:32px;
            }

            .navbar-brand{
                font-size:22px;
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
    <a href="https://wa.me/628123456789"
    target="_blank"
    class="wa-float">

        <i class="fab fa-whatsapp"></i>

    </a>

    <!-- BOOTSTRAP CDN -->
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

    </script>

</body>
</html>