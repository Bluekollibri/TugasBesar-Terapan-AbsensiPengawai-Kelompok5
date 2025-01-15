<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Beranda Karyawan</title>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" value="Absen Karyawan" readonly="" />
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <!-- Menampilkan Nama Karyawan -->
                                        <h5 class="name">Selamat Datang, {{ $NamaKaryawan }}</h5> <!-- Gunakan NamaKaryawan, bukan user -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content -->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <h2>Selamat Datang {{ $NamaKaryawan }}</h2> <!-- Gunakan NamaKaryawan, bukan user -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
