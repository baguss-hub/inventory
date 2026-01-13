<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Barang Masuk</title>
    <style>
        body { font-family: Arial; }
        table { width:100%; border-collapse: collapse; }
        table, th, td { border:1px solid black; }
        th, td { padding:8px; text-align:center; }
        .judul-laporan {
            text-align: center;
            font-weight: bold;
            margin: 20px 0;
            font-size: 18px;
        }
    </style>
</head>
<body onload="window.print()">

<?php $this->load->view('template/kop_surat'); ?>

<div class="judul-laporan">
    LAPORAN BARANG MASUK
</div>

<table>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Jumlah Masuk</th>
        <th>Tanggal Masuk</th>
        <th>User</th>
    </tr>

    <?php if (!empty($laporan)): ?>
        <?php $no=1; foreach($laporan as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['tanggal_masuk'] ?></td>
            <td><?= $row['username'] ?></td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Data tidak ditemukan</td>
        </tr>
    <?php endif; ?>
</table>

<div style="width: 100%; margin-top: 50px;">
    <div style="float: right; text-align: center;">
        <p>Petugas Gudang</p>
        <br><br><br>
        <p><b>(_______________)</b></p>
        <p><b>(Admin)</b></p>
    </div>
</div>

</body>
</html>
