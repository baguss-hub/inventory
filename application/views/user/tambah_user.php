<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data User</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data User</li>
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
              <h5 class="card-title">Tambah User</h5>

              <p class="card-text">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama User</label>
                        <input type="text" class="form-control" name="username" id="username"
                            aria-describedby="Nama User">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                        aria-describedby="Password">
                    </div>

                    <div class="mb-3">
                        <label for="password_view" class="form-label">Password View</label>
                        <input type="text" class="form-control" name="password_view" id="password_view"
                        aria-describedby="Password">
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-control" required>
                        <option value="admin">Admin</option>
                        <option value="pegawai" selected>Pegawai</option>
                        </select>
                    </div>


                  <a href="<?= base_url('user'); ?>" class="btn btn-danger">Kembali</a>
                  <button type="submit" class="btn btn-primary">Tambah</button>

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
