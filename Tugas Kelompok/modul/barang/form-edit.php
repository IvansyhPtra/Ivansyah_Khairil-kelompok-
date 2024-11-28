<?php
$query = "SELECT * FROM barang WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<h1>Form Edit Data Barang</h1>
<form action="<?= 'modul/barang/proses.php?action=update&id='.$row['id'];?>" method="post">
    <label for="nama">Nama Barang :</label>
    <input class="form-control" type="text" name="nama" value="<?= $row['nama_barang'];?>" />
    <label for="harga">Harga : </label>
    <input class="form-control" type="text" name="harga" value="<?= $row['harga'];?>" />
    <label for="stok">Stok :</label>
    <input class="form-control" type="text" name="stok" value="<?= $row['stok'];?>" />
    <label for="kategori">Kategori :</label>
    <input class="form-control mb-1" type="text" name="kategori" value="<?= $row['kategori'];?>" />
    <button class="btn btn-primary">Edit</button>
</form>


