<?php
$query = "SELECT * FROM penjualan WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<h1>Form Edit Data Penjualan</h1>
<form action="<?= 'modul/penjualan/proses.php?action=update&id='.$row['id'];?>" method="post">
    <label for="tanggal_penjualan">Tanggal Penjualan :</label>
    <input class="form-control" type="date" name="tanggal_penjualan" value="<?= $row['tgl_penjualan'];?>" />
    <label for="nama_barang">Nama Barang :</label>
    <input class="form-control" type="text" name="nama_barang" value="<?= $row['nama_barang'];?>" />
    <label for="harga">Harga : </label>
    <input class="form-control" type="text" name="harga" value="<?= $row['harga'];?>" />
    <label for="jumlah_terjual">Jumlah Terjual :</label>
    <input class="form-control" type="number" name="jumlah_terjual" value="<?= $row['jumlah_terjual'];?>" />
    <button class="btn btn-primary">Edit</button>
</form>


