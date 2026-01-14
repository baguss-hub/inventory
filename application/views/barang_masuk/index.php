<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Barang Masuk</h1><br>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Barang Masuk</li>
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
              <a class="btn btn-outline-primary mb-3" href="<?= base_url('barang_masuk/tambah') ?>">Tambah Barang Masuk</a>
              <!-- Tabel Data Barang Masuk -->
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

                    foreach ($list_barang_masuk as $bm) {
                        $key = date('F Y', strtotime($bm['tanggal_masuk']));
                        $grouped[$key][] = $bm;
                    }

                    foreach ($grouped as $bulan_tahun => $items):
                    ?>
                      <!-- HEADER GROUP (SEPERTI KODE JADWAL) -->
                      <tr class="table-secondary">
                        <td colspan="6">
                          <strong><?= $bulan_tahun ?></strong>
                        </td>
                      </tr>

                      <!-- DETAIL -->
                      <?php foreach ($items as $bm): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bm['nama_barang'] ?></td>
                        <td><?= $bm['jumlah_masuk'] ?></td>
                        <td><?= $bm['tanggal_masuk'] ?></td>
                        <td><?= $bm['username'] ?></td>
                        <td>
                          <a href="<?= base_url('barang_masuk/hapus/'.$bm['id_masuk']) ?>"
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
