<x-app-layout>

<style>

body{
    background:#f1f5f9;
    font-family:'Figtree', sans-serif;
}

/* SIDEBAR */

.sidebar-admin{
    background:linear-gradient(180deg,#0f172a,#1e293b);
    min-height:100vh;
    position:fixed;
    width:260px;
    left:0;
    top:0;
    overflow-y:auto;
    z-index:999;
}

.brand-admin{
    color:white;
    font-size:28px;
    font-weight:800;
    line-height:1.3;
}

.brand-admin span{
    color:#facc15;
}

.sidebar-menu{
    margin-top:40px;
}

.sidebar-menu-title{
    color:#94a3b8;
    font-size:13px;
    text-transform:uppercase;
    margin-bottom:15px;
    letter-spacing:1px;
}

.sidebar-admin a{
    color:#cbd5e1;
    text-decoration:none;
    display:flex;
    align-items:center;
    padding:14px 18px;
    border-radius:14px;
    margin-bottom:10px;
    transition:0.3s;
    font-weight:500;
    font-size:15px;
}

.sidebar-admin a i{
    width:24px;
}

.sidebar-admin a:hover{
    background:#334155;
    color:#fff;
    transform:translateX(4px);
}

.sidebar-admin a.active{
    background:#facc15;
    color:#0f172a;
    font-weight:700;
}

/* CONTENT */

.content-wrapper{
    margin-left:260px;
    min-height:100vh;
}

/* TOPBAR */

.topbar-admin{
    background:white;
    padding:20px 30px;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.topbar-title{
    font-size:28px;
    font-weight:700;
    color:#0f172a;
}

.admin-user{
    display:flex;
    align-items:center;
    gap:15px;
}

.admin-avatar{
    width:45px;
    height:45px;
    border-radius:50%;
    background:#facc15;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    color:#0f172a;
}

.content-admin{
    padding:30px;
}

.card-admin{
    background:white;
    border-radius:24px;
    padding:30px;
    box-shadow:0 5px 20px rgba(0,0,0,0.05);
}

.page-title{
    font-size:38px;
    font-weight:800;
    color:#0f172a;
    margin-bottom:30px;
}

.table{
    vertical-align:middle;
}

.table img{
    border-radius:14px;
    object-fit:cover;
}

/* DASHBOARD CARD */

.dashboard-card{
    background:white;
    border-radius:24px;
    padding:25px;
    box-shadow:0 5px 20px rgba(0,0,0,0.05);
    transition:0.3s;
}

.dashboard-card:hover{
    transform:translateY(-5px);
}

.dashboard-icon{
    width:65px;
    height:65px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    margin-bottom:20px;
}

.dashboard-title{
    color:#64748b;
    font-size:15px;
    margin-bottom:10px;
}

.dashboard-value{
    font-size:34px;
    font-weight:800;
    color:#0f172a;
}

/* RESPONSIVE */

@media(max-width:991px){

    .sidebar-admin{
        width:100%;
        position:relative;
        min-height:auto;
    }

    .content-wrapper{
        margin-left:0;
    }

}

</style>

<div class="sidebar-admin p-4">

    <div class="brand-admin">

        Nurul <span>Ma'rifah</span>

    </div>

    <div class="sidebar-menu">

        <div class="sidebar-menu-title">
            Main Menu
        </div>

        <a href="/dashboard"
        class="{{ request()->is('dashboard') ? 'active' : '' }}">

            <i class="fas fa-chart-pie"></i>

            Dashboard

        </a>

        <a href="/admin/slider"
        class="{{ request()->is('admin/slider*') ? 'active' : '' }}">

            <i class="fas fa-image"></i>

            Slider

        </a>

        <a href="/admin/berita"
        class="{{ request()->is('admin/berita*') ? 'active' : '' }}">

            <i class="fas fa-newspaper"></i>

            Berita

        </a>

        <a href="/admin/galeri"
        class="{{ request()->is('admin/galeri*') ? 'active' : '' }}">

            <i class="fas fa-images"></i>

            Galeri

        </a>

        <a href="/admin/fasilitas">

            <i class="fas fa-school"></i>

            Fasilitas

        </a>

        <a href="/admin/prestasi">

            <i class="fas fa-trophy"></i>

            Prestasi

        </a>

        <a href="/admin/event">

            <i class="fas fa-calendar"></i>

            Event

        </a>

        <a href="/admin/ekstrakurikuler">

            <i class="fas fa-futbol"></i>

            Ekstrakurikuler

        </a>

        <a href="/admin/ppdb">

            <i class="fas fa-user-graduate"></i>

            PPDB

        </a>

        <a href="/">

            <i class="fas fa-globe"></i>

            Website

        </a>

    </div>

</div>

<div class="content-wrapper">

    <!-- TOPBAR -->
    <div class="topbar-admin">

        <div class="topbar-title">

            Admin Dashboard

        </div>

        <div class="admin-user">

            <div>

                <div style="font-weight:700">
                    {{ Auth::user()->name }}
                </div>

                <div style="font-size:13px;color:#64748b">
                    Administrator
                </div>
            </div>

            <div class="admin-avatar">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="content-admin">

        @yield('content')

    </div>

</div>

</x-app-layout>