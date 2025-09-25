<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kotak Saran Terminal Amplas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    }
    .hero {
      background: url('https://source.unsplash.com/1600x400/?bus,terminal') center/cover no-repeat;
      color: white;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
    }
    .card-custom {
      border-radius: 20px;
    }
    footer {
      background: #212529;
      color: #fff;
      padding: 15px 0;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php"><i class="bi bi-megaphone-fill"></i> Kotak Saran Amplas</a>
      <div>
        <a href="profile.php" class="btn btn-outline-light btn-sm"><i class="bi bi-info-circle"></i> Profil Terminal</a>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero d-flex align-items-center justify-content-center" style="height: 250px;">
    <h1 class="fw-bold">Suara Anda, Perubahan untuk Terminal Amplas</h1>
  </section>

  <!-- FORM PENGADUAN -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card shadow card-custom p-4">
          <h3 class="text-center mb-4"><i class="bi bi-pencil-square"></i> Formulir Pengaduan</h3>
          <form action="simpan_pengaduan.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email/HP</label>
              <input type="text" name="kontak" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <select name="kategori" class="form-select">
                <option>Kebersihan</option>
                <option>Keamanan</option>
                <option>Tiket</option>
                <option>Fasilitas</option>
                <option>Lainnya</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Isi Pengaduan</label>
              <textarea name="isi" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Upload Foto (opsional)</label>
              <input type="file" name="foto" class="form-control">
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-send"></i> Kirim Pengaduan</button>
            </div>
          </form>
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
