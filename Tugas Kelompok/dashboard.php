<?php
include "koneksi.php";
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Aplikasi Data Toko</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data
          </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="data.php?modul=barang">Data Barang</a></li>
            <li><a class="dropdown-item" href="data.php?modul=penjualan">Persediaan Barang</a></li>
          </ul>
        </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info text-center" role="alert">
                    <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
                    <p>Anda sekarang berada di aplikasi manajemen data toko. Silahkan pilih data mana yang ingin anda lihat.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
