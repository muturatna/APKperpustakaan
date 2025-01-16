<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Silakan pilih fitur yang tersedia di Perpustakaan Digital:</p>
        <div class="features">
            <div class="feature">
                <h2>Cari Buku</h2>
                <p>Telusuri koleksi buku kami.</p>
                <a href="search.php">Cari Buku</a>
            </div>
            <div class="feature">
                <h2>Riwayat Peminjaman</h2>
                <p>Lihat riwayat buku yang Anda pinjam.</p>
                <a href="riwayat.php">Riwayat</a>
            </div>
            <div class="feature">
                <h2>Profil</h2>
                <p>Kelola informasi akun Anda.</p>
                <a href="profil.php">Profil</a>
            </div>
            <div class="feature">
                <h2>Logout</h2>
                <p>Keluar dari sistem.</p>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>