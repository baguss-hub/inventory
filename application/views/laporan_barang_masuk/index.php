<div class="content-wrapper p-4">
    <h3>Laporan Barang Masuk</h3>

    <!-- FORM FILTER BULAN -->
    <form method="get" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="month" name="bulan" class="form-control"
                       value="<?= $bulan ?>">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">
                    <i class="fa fa-search"></i> Tampilkan
                </button>
            </div>
        </div>
    </form>

    <!-- TABEL LAPORAN -->
    <table class="table table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Masuk</th>
                <th>Tanggal Masuk</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($laporan)): ?>
                <?php $no = 1; foreach ($laporan as $row): ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $row['nama_barang'] ?></td>
                    <td class="text-center"><?= $row['jumlah_masuk'] ?></td>
                    <td class="text-center"><?= $row['tanggal_masuk'] ?></td>
                    <td class="text-center"><?= $row['username'] ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">
                        Data tidak ditemukan
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- TOMBOL CETAK -->
    <?php if (!empty($laporan)): ?>
        <a href="<?= site_url('laporan_barang_masuk/cetak?bulan='.$bulan) ?>"
           class="btn btn-success mb-3" target="_blank">
            <i class="fa fa-print"></i> Cetak Laporan
        </a>
    <?php endif; ?>
</div>
