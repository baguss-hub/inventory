<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Admin 🧠</h1>
          <small class="text-muted">
            Hari ini gudang masih berdiri (syukurlah)
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
        👋 Selamat datang Admin! Jangan lupa minum air & save kerjaan.
      </div>

      <!-- Status Row -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Gudang Aman 😌</h4>
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
              <h4>Barang Masuk 📦</h4>
              <p>Hari ini lumayan rame</p>
            </div>
            <div class="icon">
              <i class="fas fa-arrow-down"></i>
            </div>
            <a href="#" class="small-box-footer">
              Detail <i class="fas fa-eye"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h4>Barang Keluar 🚚</h4>
              <p>Masih bisa dilacak</p>
            </div>
            <div class="icon">
              <i class="fas fa-arrow-up"></i>
            </div>
            <a href="#" class="small-box-footer">
              Riwayat <i class="fas fa-history"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h4>Stok Hilang 💀</h4>
              <p>Kita pura-pura ga tau</p>
            </div>
            <div class="icon">
              <i class="fas fa-question"></i>
            </div>
            <a href="#" class="small-box-footer">
              Investigasi <i class="fas fa-search"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Mood Card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kondisi Admin Hari Ini 😵‍💫</h3>
        </div>
        <div class="card-body">
          <ul>
            <li>Pagi: Semangat palsu ☀️</li>
            <li>Siang: Salah input 2x 😐</li>
            <li>Sore: Mulai curiga sama sistem 🤨</li>
            <li>Malam: Pasrah 😴</li>
          </ul>
        </div>
      </div>

      <!-- Quote -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Quote Hari Ini 🌟</h3>
        </div>
        <div class="card-body">
          <p>“Barang bisa dipinjam, tapi senyummu jangan hilang 😊”</p>
        </div>
      </div>
    </div>
  </div>
</div>