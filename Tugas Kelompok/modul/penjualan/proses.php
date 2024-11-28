<?php
include "../../koneksi.php";

if($_GET['action']=="tambah2"){
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $total_penjualan = $harga * $jumlah_terjual;

    $query = "INSERT INTO penjualan (tgl_penjualan, nama_barang, harga, jumlah_terjual, total_penjualan) VALUES ('$tanggal_penjualan', '$nama_barang',
     '$harga', '$jumlah_terjual', '$total_penjualan')";
    $mysqli->query($query);
    header('location:../../data.php?modul=penjualan');
}
elseif
    ($_GET['action']=="update"){
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $total_penjualan = $harga * $jumlah_terjual;
        $query = "UPDATE penjualan set 
            tgl_penjualan='$tanggal_penjualan', 
            nama_barang='$nama_barang', 
            harga='$harga', 
            jumlah_terjual='$jumlah_terjual',
            total_penjualan = '$total_penjualan'
            WHERE id='$_GET[id]'";
    $mysqli->query($query);
    header('location:../../data.php?modul=penjualan');
}
elseif
    (   $_GET['action']=="hapus"){
        $query = "DELETE FROM penjualan where id='$_GET[id]'";
        $mysqli->query($query);
        header('location:../../data.php?modul=penjualan');
}