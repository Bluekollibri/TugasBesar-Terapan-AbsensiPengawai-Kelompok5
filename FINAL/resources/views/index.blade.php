<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Absensi Karyawan 1.0</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <style>
      /* Menambahkan background image untuk halaman */
    body {
      background: url('img/Coverawal.png') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Menyeimbangkan tampilan area login */
    .hero-banner {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* memastikan tinggi 100% viewport */
      text-align: center;
    }

    .zero-panel-content {
      background-color: rgba(0, 0, 0, 0.7); /* Membuat latar belakang sedikit lebih gelap untuk memperjelas teks */
      padding: 60px 40px; /* Menambah padding untuk memperbesar box */
      border-radius: 15px; /* Menambahkan radius border yang lebih besar */
      text-align: center;
      width: 80%; /* Lebar lebih besar */
      max-width: 500px; /* Membatasi lebar maksimal agar tidak terlalu besar */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan untuk memberikan efek 3D */
    }

    .zero-panel-content h1 {
      font-size: 36px; /* Memperbesar ukuran font */
      margin-bottom: 30px; /* Memberikan jarak lebih besar */
      font-weight: bold;
      color: #fff;
    }

    .btn {
      font-size: 20px; /* Memperbesar ukuran font tombol */
      padding: 18px 36px; /* Menambah padding tombol */
      margin: 15px 0; /* Memberikan margin lebih besar */
      border-radius: 8px; /* Menambah sudut tombol lebih bulat */
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn-warning {
      background-color: #ff9800;
      border: none;
    }

    .btn-warning:hover {
      background-color: #e68900;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

  </style>
</head>
<body>

  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row content" id="login">
          <div class="col-lg-12 danger text-center zero-panel">
            <div class="col-lg-12 zero-panel-content">
              <h1>LOGIN SEBAGAI</h1>
              <ul class="list-inline" id="chart-skill">
                <li><a href="/admin2" target="_blank"><button class="btn btn-warning">Login Admin</button></a></li><br>
                <li><a href="/login" target="_blank"><button class="btn btn-primary">Login Karyawan</button></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->
  </main>

</body>
</html>
