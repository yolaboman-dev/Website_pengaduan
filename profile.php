<?php
// profile.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Terminal Amplas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      font-family: 'Segoe UI', sans-serif;
    }
    .card-custom {
      border-radius: 20px;
      padding: 30px;
      background: #fff;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    footer {
      background: #212529;
      color: #fff;
      padding: 15px 0;
      margin-top: 40px;
    }
    .logo {
      display: block;
      margin: 0 auto 20px auto;
      max-width: 320px;
      animation: fadeInDown 1.2s ease;
    }
    .judul {
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
      color: #0d6efd;
      animation: fadeIn 2s ease;
    }
    p.justify {
      text-align: justify;
      text-indent: 40px;
      line-height: 1.8;
    }
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php"><i class="bi bi-megaphone-fill"></i> Kotak Saran Amplas</a>
      <div>
        <a href="index.php" class="btn btn-outline-light btn-sm"><i class="bi bi-pencil-square"></i> Form Pengaduan</a>
      </div>
    </div>
  </nav>

  <!-- PROFIL TERMINAL -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="card card-custom">
          <img src="logo.png" alt="Logo Harhubnas" class="logo">
          
          <h3 class="judul"><i class="bi bi-building"></i> Terminal Amplas Medan</h3>

          <p class="justify">
            Terminal Amplas adalah terminal tipe A yang terletak di Medan, Sumatera Utara. Terminal ini menjadi pusat transportasi darat yang melayani berbagai rute antar kota maupun antar provinsi. Selain sebagai pusat transportasi, terminal ini juga dilengkapi fasilitas penunjang seperti area tunggu, loket tiket, toilet umum, dan pusat informasi.
          </p>

          <p class="justify">
            Melalui website ini, masyarakat dapat menyampaikan keluhan, saran, dan aspirasi untuk membantu meningkatkan kualitas layanan Terminal Amplas.
          </p>

          <h5 class="mt-4 text-primary"><i class="bi bi-geo-alt-fill"></i> Alamat</h5>
          <p class="ms-3">Jl. Sisingamangaraja, Amplas, Medan, Sumatera Utara</p>

          <!-- Peta Google Maps -->
          <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127613.68238736791!2d98.6188935!3d3.5590404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303132dc15451fcd%3A0x7fcbf1b4c06c09e1!2sTerminal%20Amplas%2C%20Medan!5e0!3m2!1sid!2sid!4v1693798765432!5m2!1sid!2sid" 
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="text-center">
    <p class="mb-0">&copy; 2025 Terminal Amplas | Dibuat untuk sarana aspirasi masyarakat</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
