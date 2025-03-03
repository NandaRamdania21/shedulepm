<?php
session_start();

// Definisikan username dan password
$valid_username = "admin";
$valid_password = "admin123";

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password sesuai
    if ($username == $valid_username && $password == $valid_password) {
        // Simpan username ke dalam session
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "<script>alert('Username atau Password salah!'); window.location.href='login.html';</script>";
    }
} else {
    // Jika tidak ada post data, redirect ke halaman login
    header('Location: login.html');
}
?>
