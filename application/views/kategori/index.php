  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kategori</h1><br>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
                <a class="btn btn-outline-primary" href="<?= base_url('kategori/tambah'); ?>" role="button">
                    <span class="btn-label">
                        <i class="fa fa-plus"></i>
                    </span>
                    Tambah Data
                </a>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID_Kategori</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($list_kategori as $kategori) : ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $kategori['nama_kategori'] ?></td>
                                    <td>
                                        <a href="<?= base_url('kategori/ubah/'.$kategori['id_kategori']) ?>">
                                            <span class="badge bg-success">Edit</span>
                                        </a> 
                                        <a href="<?= base_url('kategori/hapus/'.$kategori['id_kategori']) ?>">
                                            <span class="badge bg-danger">Hapus</span>
                                        </a>
                                    </td>
                                    
                                </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
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
