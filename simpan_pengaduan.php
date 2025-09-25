<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kontak   = mysqli_real_escape_string($koneksi, $_POST['kontak']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $isi      = mysqli_real_escape_string($koneksi, $_POST['isi']);

    // Upload foto (jika ada)
    $foto = "";
    if (!empty($_FILES['foto']['name'])) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); // buat folder uploads jika belum ada
        }
        $foto = $targetDir . time() . "_" . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    }

    // Query simpan ke database
    $query = "INSERT INTO pengaduan (nama, kontak, kategori, isi, foto) 
              VALUES ('$nama','$kontak','$kategori','$isi','$foto')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Pengaduan berhasil dikirim!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Akses tidak valid.";
}
?>
