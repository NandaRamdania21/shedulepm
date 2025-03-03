<?php
$host = 'localhost';
$username = 'root';   // Username default MySQL di XAMPP
$password = '';       // Password kosong (default di XAMPP)
$db_name = 'schedulepm';  // Nama database yang sudah Anda buat

// Cek koneksi ke database
$connection = mysqli_connect($host, $username, $password, $db_name);

// Jika koneksi gagal
if (!$connection) {
    die('Koneksi gagal: ' . mysqli_connect_error());
} else {
    echo 'Koneksi berhasil!';
}
?>
