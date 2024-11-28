<?php
include "koneksi.php";
session_start();
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
            Barang
          </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="modul/barang/index.php">Data Barang</a></li>
            <li><a class="dropdown-item" href="?modul=persediaan">Persediaan Barang</a></li>
          </ul>
        </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

<?php
            if (!isset($_GET['modul'])) {
                // Tidak ada modul yang dipilih, tetap tampilkan halaman default
            } elseif ($_GET['modul'] == "barang") {
                include "modul/barang/index.php";
            } elseif ($_GET['modul'] == "penjualan") {
                include "modul/penjualan/index.php";
            } elseif ($_GET['modul'] == "tambah-data") {
                include "modul/barang/form-data.php";
            } elseif ($_GET['modul'] == 'edit-data') {
                include "modul/barang/form-edit.php";
            } elseif ($_GET['modul'] == "tambah-data2") {
                include "modul/penjualan/form-data.php";
            } elseif ($_GET['modul'] == 'edit-data2') {
                include "modul/penjualan/form-edit.php";
            }
        ?>