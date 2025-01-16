<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Simulasi data buku dari database
$books = [
    ["title" => "Pemrograman Web dengan PHP", "author" => "John Doe", "year" => 2020],
    ["title" => "Belajar HTML & CSS", "author" => "Jane Smith", "year" => 2019],
    ["title" => "Panduan MySQL untuk Pemula", "author" => "David Tan", "year" => 2021],
    ["title" => "JavaScript Lanjutan", "author" => "Emily White", "year" => 2022],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Memilih Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
        <h2>Daftar Buku Tersedia</h2>
        <div class="book-list">
            <?php foreach ($books as $book): ?>
                <div class="book-item">
                    <h3><?php echo $book['title']; ?></h3>
                    <p>Penulis: <?php echo $book['author']; ?></p>
                    <p>Tahun: <?php echo $book['year']; ?></p>
                    <button onclick="alert('Anda memilih buku: <?php echo $book['title']; ?>')">Pilih Buku</button>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="dashboard.php" class="back-button">Kembali ke Dashboard</a>
    </div>
</body>
</html>