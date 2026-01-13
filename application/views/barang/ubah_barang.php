<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="m-0">Edit Data Barang</h1>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Barang</h5>
        </div>
        <div class="card-body">

          <form method="post">

            <!-- Kategori -->
            <div class="mb-3">
              <label for="kategori_id" class="form-label">Kategori</label>
              <select name="kategori_id" id="kategori_id" class="form-control" required>
                <option value="<?= $barang['kategori_id']; ?>">
                  <?= $kategori[array_search($barang['kategori_id'], array_column($kategori, 'id_kategori'))]['nama_kategori']; ?>
                </option>
                <?php foreach ($kategori as $k): ?>
                  <?php if($k['id_kategori'] != $barang['kategori_id']): ?>
                    <option value="<?= $k['id_kategori']; ?>">
                      <?= $k['nama_kategori']; ?>
                    </option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
    
            <!-- Nama Barang -->
            <div class="mb-3">
              <label for="nama_barang" class="form-label">Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control" id="nama_barang" 
                     value="<?= $barang['nama_barang']; ?>" required>
            </div>

            <!-- Stok -->
            <div class="mb-3">
              <label for="stok" class="form-label">Stok</label>
              <input type="number" name="stok" class="form-control" id="stok" 
                     value="<?= $barang['stok']; ?>" required>
            </div>

            <!-- Satuan Barang -->
            <div class="mb-3">
              <label for="satuan" class="form-label">Satuan Barang</label>
              <select name="satuan" id="satuan" class="form-control" required>
                <option value="<?= $barang['satuan']; ?>"><?= $barang['satuan']; ?></option>
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
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <a href="<?= base_url('barang'); ?>" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

          </form>

        </div>
      </div>

    </div>
  </div>

</div>
