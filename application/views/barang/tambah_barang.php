<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Barang</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Barang</li>
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
              <h5 class="card-title">Tambah Barang</h5>

              <p class="card-text">
                <form method="post">

                <!-- Kategori -->
                <div class="mb-3">
                  <label>Kategori</label>
                  <select name="kategori_id" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    <?php foreach ($kategori as $k): ?>
                      <option value="<?= $k['id_kategori']; ?>">
                        <?= $k['nama_kategori']; ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                  <!-- Nama Barang -->
                  <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required placeholder="Masukkan Nama Barang">
                  </div>

                  <!-- Stok -->
                  <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" required placeholder="Masukkan Stok Barang">
                  </div>

                  <!-- Satuan Barang -->
                <div class="mb-3">
                    <label>Satuan Barang</label>
                        <select name="satuan" class="form-control" required>
                            <option value="">-- Pilih Satuan --</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Unit">Unit</option>
                            <option value="Pack">Pack</option>
                            <option value="Renceng">Renceng</option>
                            <option value="Lusin">Lusin</option>
                            <option value="Dus">Dus</option>
                            <option value="Box">Box</option>
                            <option value="Botol">Botol</option>
                            <option value="Sachet">Sachet</option>
                            <option value="Kg">Kg</option>
                            <option value="Liter">Liter</option>
                        </select>
                </div>

                  <a href="<?= base_url('barang'); ?>" class="btn btn-danger">Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

              </p>

            </div><!-- /.card-body -->
          </div><!-- /.card -->

        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
