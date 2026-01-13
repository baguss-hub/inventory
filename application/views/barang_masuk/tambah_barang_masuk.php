<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Barang Masuk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('barang_masuk'); ?>">Barang Masuk</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <!-- Validasi error -->
              <?php if(validation_errors()): ?>
                <div class="alert alert-danger"><?= validation_errors(); ?></div>
              <?php endif; ?>

              <!-- Form tambah barang masuk -->
              <form method="post" action="<?= base_url('barang_masuk/tambah'); ?>">

                <!-- Pilih Barang -->
                <div class="mb-3">
                  <label for="barang_id">Nama Barang</label>
                  <select name="barang_id" id="barang_id" class="form-control" required>
                    <option value="">-- Pilih Barang --</option>
                    <?php foreach($barang as $b): ?>
                      <option value="<?= $b['id_barang']; ?>" <?= set_select('barang_id', $b['id_barang']); ?>>
                        <?= $b['nama_barang']; ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <!-- Jumlah Barang -->
                <div class="mb-3">
                  <label for="jumlah_masuk">Jumlah</label>
                  <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="form-control" min="1" required placeholder="Masukkan Jumlah Barang" value="<?= set_value('jumlah_masuk'); ?>">
                </div>

                <!-- Tanggal Masuk -->
                <div class="mb-3">
                  <label for="tanggal_masuk">Tanggal Masuk</label>
                  <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>">
                </div>

                <!-- Tombol aksi -->
                <a href="<?= base_url('barang_masuk'); ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>

              </form>

            </div><!-- /.card-body -->
          </div><!-- /.card -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div><!-- /.content-wrapper -->
