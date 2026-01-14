<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
          <small class="text-muted">
            Hari ini gudang masih berdiri
          </small>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <!-- Alert -->
      <div class="alert alert-info">
         Selamat datang! Jangan lupa minum
      </div>

      <!-- Status Row -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Gudang Aman</h4>
              <p>Stok masih masuk akal</p>
            </div>
            <div class="icon">
              <i class="fas fa-warehouse"></i>
            </div>
            <a href="<?= base_url('barang') ?>" class="small-box-footer">
              Lihat stok <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h4>Barang Masuk</h4>
              <p>Lumayan rame</p>
            </div>
            <div class="icon">
              <i class="fas fa-arrow-down"></i>
            </div>
            <a href="<?= base_url('barang_masuk') ?>" class="small-box-footer">
              Detail <i class="fas fa-eye"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h4>Barang Keluar</h4>
              <p>Masih bisa dilacak</p>
            </div>
            <div class="icon">
              <i class="fas fa-arrow-up"></i>
            </div>
            <a href="<?= base_url('barang_keluar') ?>" class="small-box-footer">
              Riwayat <i class="fas fa-history"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h4>Laporan</h4>
              <p>Barang Masuk</p>
            </div>
            <div class="icon">
              <i class="fas fa-question"></i>
            </div>
            <a href="<?= base_url('laporan_barang_masuk') ?> " class="small-box-footer">
              check <i class="fas fa-search"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Quote Hari Ini </h3>
        </div>
        <div class="card-body">
          <p>“Barang bisa dipinjam, tapi senyummu jangan hilang ”</p>
        </div>
      </div>
    </div>
  </div>
</div>