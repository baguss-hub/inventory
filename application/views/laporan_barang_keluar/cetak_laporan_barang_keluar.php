<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Laporan Barang Keluar</title>
    <style>
        body { font-family: Arial; }
        table { width:100%; border-collapse: collapse; }
        table, th, td { border:1px solid black; }
        th, td { padding:8px; text-align:center; }
        .judul-laporan { text-align: center; margin: 20px 0; font-size: 18px; font-weight: bold; }
    </style>
</head>
<body onload="window.print()">

<?php $this->load->view('template/kop_surat'); ?>

<div class="judul-laporan">
    LAPORAN BARANG KELUAR
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah Keluar</th>
            <th>Tanggal Keluar</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($laporan as $row): ?>
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

<div style="width: 100%; margin-top: 50px;">
    <div style="float: right; text-align: center;">
        <p>Petugas Gudang</p>
        <br><br><br>
        <p><b>(_______________)</b></p>
    </div>
</div>

</body>
</html>
