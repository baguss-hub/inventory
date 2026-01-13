<div class="content-wrapper p-4">
    <h3>Laporan Barang Keluar</h3>

    <form method="get" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="month" name="bulan" class="form-control" value="<?= $bulan ?>">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary">Tampilkan</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Keluar</th>
                <th>Tanggal Keluar</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($laporan as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_barang'] ?></td>
                <td><?= $row['jumlah_keluar'] ?></td>
                <td><?= $row['tanggal_keluar'] ?></td>
                <td><?= $row['username'] ?></td>
            </tr>
            <?php endforeach; ?>
            <?php if(empty($laporan)): ?>
            <tr>
                <td colspan="5" class="text-center">Data tidak ditemukan</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if(!empty($laporan)): ?>
    <a href="<?= site_url('laporan_barang_keluar_controller/cetak?bulan='.$bulan) ?>"
       class="btn btn-success mt-3" target="_blank">
        <i class="fa fa-print"></i> Cetak Laporan
    </a>
    <?php endif; ?>
</div>
