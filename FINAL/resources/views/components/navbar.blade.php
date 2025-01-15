<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="" href="index.html">
                  
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="admin2.php">
                        <i class="fas fa-tachometer-alt"></i>Beranda</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        
                    </ul>
                </li>
                <li>
                    <a href="{{ route('data_karyawans.index') }}" >
                        <i class="far fa-check-square"></i>Data Karyawan</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" >
                        <i class="fas fa-table"></i>Data user</a>
                </li>
                <li>
                    <a href="{{ route('jabatans.index') }}" >
                        <i class="far fa-check-square"></i>Data Jabatan</a>
                </li>
                <li>
                    <a href="{{ route('departemens.index') }}" >
                    <i class="far fa-check-square"></i>Data departemen</a>
                </li>
                <li>
                    <a href="/dataabsen">
                        <i class="fas fa-calendar-alt"></i>Data Absen</a>
                </li>
               <li>
                    <a href="/dataketerangan">
                        <i class="fas fa-table"></i>data Keterangan
                    </a>
                </li>
               
               
            </ul>
        </div>
    </nav>

</header>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/admin2">
           <h2>COTTON FIELD Co.</h2>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="/admin2">
                        <i class="fas fa-tachometer-alt"></i>Beranda</a>
                  
                </li>
                <li>
                    <a href="{{ route('data_karyawans.index') }}" >
                        <i class="far fa-check-square"></i>Data Karyawan</a>
                </li>
                <li><a href="{{ route('users.index') }}" >
                    <i class="fas fa-table"></i>Data user</a>
                </li>
                <li>
                    <a href="{{ route('jabatans.index') }}" >
                        <i class="far fa-check-square"></i>Data Jabatan</a>
                </li>
                <li>
                    <a href="{{ route('departemens.index') }}" >
                    <i class="far fa-check-square"></i>Data departemen</a>
                </li>
                <li>
                    <a href="/dataabsen">
                        <i class="fas fa-calendar-alt"></i>Data Absen</a>
                </li>
                <li>
                    <a href="/dataketerangan">
                        <i class="fas fa-map-marker-alt"></i>Data Keterangan</a>
                </li>
                <li>
                    <a href="/">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>