<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Barang Keluar</h1><br>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="<?= base_url('dashboard') ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Barang Keluar</li>
          </ol>   
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <!-- Flash Message -->
              <?php if($this->session->flashdata('message')): ?>
                <?= $this->session->flashdata('message') ?>
              <?php endif; ?>

              <!-- Tombol Tambah -->
              <a class="btn btn-outline-primary mb-3"
                 href="<?= base_url('barang_keluar/tambah') ?>">
                 Tambah Barang Keluar
              </a>

              <!-- Tabel Data Barang Keluar -->
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Tanggal</th>
                      <th>User</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      $no = 1;
                      $grouped = [];

                      foreach ($list_barang_keluar as $bk) {
                          $key = date('F Y', strtotime($bk['tanggal_keluar']));
                          $grouped[$key][] = $bk;
                      }

                      foreach ($grouped as $bulan_tahun => $items):
                    ?>

                      <!-- HEADER GROUP (BULAN & TAHUN) -->
                      <tr class="table-secondary">
                        <td colspan="6">
                          <strong><?= $bulan_tahun ?></strong>
                        </td>
                      </tr>

                      <!-- DETAIL BARANG KELUAR -->
                      <?php foreach ($items as $bk): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bk['nama_barang'] ?></td>
                        <td><?= $bk['jumlah_keluar'] ?></td>
                        <td><?= $bk['tanggal_keluar'] ?></td>
                        <td><?= $bk['username'] ?></td>
                        <td>
                          <a href="<?= base_url('barang_keluar/hapus/'.$bk['id_keluar']) ?>"
                             class="badge bg-danger"
                             onclick="return confirm('Yakin ingin dihapus?')">
                             Hapus
                          </a>
                        </td>
                      </tr>
                      <?php endforeach; ?>

                    <?php endforeach; ?>
                  </tbody>

                </table>
              </div> <!-- /.table-responsive -->

            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col-lg-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
