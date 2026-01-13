  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang</h1><br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Barang</li>
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
                <?php if($this->session->flashdata('message')) : ?>
                  <?= $this->session->flashdata('message') ?>
                <?php endif; ?>
                <a class="btn btn-outline-primary mb-3" href="<?php echo base_url('barang/tambah'); ?>" role="button">Tambah Data </a>
                  <table class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">ID Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no= 1;
                        foreach ($list_barang as $barang) : ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $barang['nama_kategori'] ?></td>
                                    <td><?= $barang['nama_barang'] ?></td>
                                    <td><?= $barang['stok'] ?></td>
                                    <td><?= $barang['satuan'] ?></td>
                                    <td>
                                        <a href="<?= base_url('barang/ubah/') ?><?= $barang['id_barang'] ?>"><span class="badge bg-success">Edit</span>
                                        </a> 
                                        <a href="<?= base_url('barang/hapus/') ?><?= $barang['id_barang'] ?>"><span class="badge bg-danger">Hapus</span></a>
                                    </td>
                                </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                    </table>
                  </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
