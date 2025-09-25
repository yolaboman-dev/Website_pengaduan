<?php
$host = "localhost";
$user = "root";   // default user XAMPP
$pass = "";       // default password kosong
$db   = "kotak_saran";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
