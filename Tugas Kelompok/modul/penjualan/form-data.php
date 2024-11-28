<h1>Form Tambah Data Penjualan</h1>
<hr>
<form action="modul/penjualan/proses.php?action=tambah2" method="post">
    <label for="tanggal_penjualan">Tanggal Penjualan</label>
    <input class="form-control" type="date" name="tanggal_penjualan" />
    <label for="nama_barang">Nama Barang</label>
    <input class="form-control" type="text" name="nama_barang" />
    <label for="harga">Harga</label>
    <input class="form-control" type="number" name="harga" />
    <label for="jumlah_terjual">Jumlah Terjual</label>
    <input class="form-control" type="number" name="jumlah_terjual" />
    <button class="btn btn-primary">Simpan</button>
</form>

