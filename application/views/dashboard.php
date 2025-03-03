<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, arahkan ke halaman login
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is your dashboard.</p>
        <!-- Tombol Logout -->
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
