<div class="container">
    <h1>Data Barang</h1>
    <hr>
    <form action="data.php" method="get">
        <input type="hidden" name="modul" value="barang">
        <div class="row align-items-start">
            <div class="col">
                <select class="form-select" name="filter">
                    <option value="">Pilih Kategori</option> <!-- Tambahkan pilihan default -->
                    <?php
                    // Ambil kategori dari database
                    $q_kategori = "SELECT kategori FROM barang GROUP BY kategori";
                    $r_kategori = $mysqli->query($q_kategori);
                    while($data_kategori = $r_kategori->fetch_assoc()){
                    ?>
                        <option value="<?= htmlspecialchars($data_kategori['kategori']); ?>" <?php echo (isset($_GET['filter']) && $_GET['filter'] == $data_kategori['kategori']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($data_kategori['kategori']); ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <button class="btn btn-primary">Filter</button>
                <a href="data.php?modul=barang" class="btn btn-secondary">Batal</a>
 <!-- Tombol Cancel -->
            </div>
        </div>
    </form>

    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Pastikan filter aman dari SQL Injection
            if (isset($_GET['filter']) && !empty($_GET['filter'])) {
                $filter = mysqli_real_escape_string($mysqli, $_GET['filter']);
                $query = "SELECT * FROM barang WHERE kategori='$filter'";
            } else {
                $query = "SELECT * FROM barang";
            }

            // Eksekusi query
            $result = $mysqli->query($query);
            if ($result->num_rows > 0) {
                $no = 0;
                while ($row = $result->fetch_assoc()) {
                    $no++;
            ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= htmlspecialchars($row['nama_barang']); ?></td>
                        <td><?= number_format($row['harga'], 2, ',', '.'); ?></td>
                        <td><?= $row['stok']; ?></td>
                        <td><?= htmlspecialchars($row['kategori']); ?></td>
                        <td>
                            <a href="<?= 'data.php?modul=edit-data&id=' . $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= 'modul/barang/proses.php?action=hapus&id=' . $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                // Jika tidak ada data ditemukan
                echo "<tr><td colspan='6' class='text-center'>Tidak ada data ditemukan.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="data.php?modul=tambah-data" class="btn btn-success mt-3">Tambah Data</a>
</div>
