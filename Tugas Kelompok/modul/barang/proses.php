<?php
include "../../koneksi.php";

if($_GET['action']=="tambah"){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $query = "INSERT INTO barang (nama_barang,harga,stok,kategori) VALUES('$nama','$harga','$stok','$kategori')";
    $mysqli->query($query);
    header('location:../../data.php?modul=barang');
}
elseif
    (   $_GET['action']=="update"){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];
        $query = "UPDATE barang set 
            nama_barang='$nama', 
            harga='$harga', 
            stok='$stok',
            kategori='$kategori'
            WHERE id='$_GET[id]'";
    $mysqli->query($query);
    header('location:../../data.php?modul=barang');
}
elseif
    (   $_GET['action']=="hapus"){
        $query = "DELETE FROM barang where id='$_GET[id]'";
        $mysqli->query($query);
        header('location:../../data.php?modul=barang');
}