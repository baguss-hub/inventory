<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4 custom-sidebar-primary">  <!-- Brand Logo --> 
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <!-- Dashboard-->
        <li class="nav-item menu-open">
          <a href="#" class="card-header card-secondary-header nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <!-- Manajemen Data -->
        <li class="nav-item menu-close">
          <a href="#" class="card-header card-secondary-header nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Manajemen Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('ortu'); ?>" class="nav-link <?= (isset($data['menu']) && $data['menu']=='ortu') ? 'active' : ''; ?>">
                <i class="fas fa-user nav-icon"></i>
                <p>User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Kategori</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-boxes nav-icon"></i>
                <p>Barang</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Transaksi -->
        <li class="nav-item menu-close">
          <a href="#" class="card-header card-secondary-header nav-link">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>
              Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-arrow-circle-down nav-icon"></i>
                <p>Barang Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-arrow-circle-up nav-icon"></i>
                <p>Barang Keluar</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Laporan -->
        <li class="nav-item menu-close">
            <a href="#" class="card-header card-secondary-header nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-file-import nav-icon"></i>
                <p>Laporan Barang Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="fas fa-file-export nav-icon"></i>
                <p>Laporan Barang Keluar</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Log Out -->
        <li class="nav-item">
          <a href="<?php echo site_url('login/logout'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Log Out</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>