<h1>Form  Barang</h1>
<hr>
<form action="modul/barang/proses.php?action=tambah" method="post">
    <label for="nama">Nama Barang</label>
    <input class="form-control" type="text" name="nama" />
    <label for="harga">Harga</label>
    <input class="form-control" type="text" name="harga" />
    <label for="stok">Stok</label>
    <input class="form-control" type="number" name="stok" />
    <label for="kategori">Kategori</label>
    <input class="form-control mb-1" type="text" name="kategori" />
    <button class="btn btn-primary">Simpan</button>
</form>

