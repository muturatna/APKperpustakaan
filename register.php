<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan";

// Koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Cek apakah username sudah ada
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah digunakan. Silakan coba username lain.";
    } else {
        // Tambahkan data ke database
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $query)) {
            echo "Registrasi berhasil! <a href='index.html'>Login</a>";
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Username sudah digunakan. Silakan coba username lain.";
    } else {
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $query)) {
            $_SESSION['username'] = $username; // Simpan sesi
            header("Location: pilih_buku.php"); // Arahkan ke menu memilih buku
            exit();
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Perpustakaan Digital</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="register-screen">
        <img src="./assets/perpustakaan.png" alt="Logo Perpustakaan" />
        <h2>Register</h2>
        <form action="register.php" method="POST">
          <input type="text" name="username" placeholder="Username" required />
          <input
            type="password"
            name="password"
            placeholder="Password"
            required
          />
          <input type="email" name="email" placeholder="Email" required />
          <button type="submit"><a href="pilih_buku.php">Register</a></button>
        </form>
        <a href="index.html">Kembali ke Login</a>
      </div>
    </div>
  </body>
</html>
