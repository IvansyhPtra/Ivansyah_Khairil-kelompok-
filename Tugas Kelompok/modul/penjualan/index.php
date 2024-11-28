<div class="container">
    <h1>Data Penjualan</h1>
    <hr>

    <table class="table table-striped mt-2">
        <thead>
            <tr>
            <th>id</th>
            <th>tanggal penjualan</th>
            <th>nama Barang</th>
            <th>harga</th>
            <th>jumlah terjual</th>
            <th>total penjualan</th>
            <th>aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            {
            $query = "SELECT * FROM penjualan";
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
                        <td><?= $row['tgl_penjualan']; ?></td>
                        <td><?= htmlspecialchars($row['nama_barang']); ?></td>
                        <td><?= number_format($row['harga'], 2, ',', '.'); ?></td>
                        <td><?= $row['jumlah_terjual']; ?></td>
                        <td><?= number_format($row['total_penjualan'], 2, ',', '.'); ?></td>
                        <td>
                            <a href="<?= 'data.php?modul=edit-data2&id=' . $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= 'modul/penjualan/proses.php?action=hapus&id=' . $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
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

    <a href="data.php?modul=tambah-data2" class="btn btn-success mt-3">Tambah Data</a>
</div>
