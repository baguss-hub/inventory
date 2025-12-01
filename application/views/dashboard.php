<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <!-- Card Header -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="card-title">
                <p class="mb-0"><i class="fa-solid fa-snowflake"></i> Selamat Datang di Dashboard Admin</p>
              </div>
            </div>
            <div class="card-body">
              <div class="card-text">
                Ini Template
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Baris pertama: Dua Card berdampingan -->
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Coba Aja</h5>
              <p class="card-text">Selamat Datang.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card Kanan</h5>
              <p class="card-text">Ini di sisi kanan.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Baris kedua: Dua To Do List berdampingan -->
      <div class="row">
        <!-- To Do List 1 -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="ion ion-clipboard mr-1"></i> To Do List 1</h3>
            </div>
            <div class="card-body">
              <ul class="todo-list" data-widget="todo-list">
                <li>
                  <span class="handle"><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></span>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                    <label for="todoCheck1"></label>
                  </div>
                  <span class="text">Design a nice theme</span>
                  <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                  <div class="tools"><i class="fas fa-edit"></i><i class="fas fa-trash-o"></i></div>
                </li>
                <li>
                  <span class="handle"><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></span>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                    <label for="todoCheck2"></label>
                  </div>
                  <span class="text">Make the theme responsive</span>
                  <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                  <div class="tools"><i class="fas fa-edit"></i><i class="fas fa-trash-o"></i></div>
                </li>
              </ul>
            </div>
            <div class="card-footer clearfix">
              <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
            </div>
          </div>
        </div>

        <!-- To Do List 2 -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="ion ion-clipboard mr-1"></i> To Do List 2</h3>
            </div>
            <div class="card-body">
              <ul class="todo-list" data-widget="todo-list">
                <li>
                  <span class="handle"><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></span>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                    <label for="todoCheck3"></label>
                  </div>
                  <span class="text">Tess</span>
                  <small class="badge badge-success"><i class="far fa-clock"></i> 7 day</small>
                  <div class="tools"><i class="fas fa-edit"></i><i class="fas fa-trash-o"></i></div>
                </li>
                <li>
                  <span class="handle"><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></span>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                    <label for="todoCheck4"></label>
                  </div>
                  <span class="text">Let theme shine like a star</span>
                  <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                  <div class="tools"><i class="fas fa-edit"></i><i class="fas fa-trash-o"></i></div>
                </li>
                <li>
                  <span class="handle"><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></span>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                    <label for="todoCheck5"></label>
                  </div>
                  <span class="text">Check your messages</span>
                  <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                  <div class="tools"><i class="fas fa-edit"></i><i class="fas fa-trash-o"></i></div>
                </li>
              </ul>
            </div>
            <div class="card-footer clearfix">
              <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Baris ketiga: Calendar full width -->
      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card bg-gradient-success">
            <div class="card-header border-0">
              <h3 class="card-title"><i class="far fa-calendar-alt"></i> Header Card</h3>
            </div>
            <div class="card-body pt-0">
              <div id="card_bawah" style="width: 100%">
                <h4>Ini konten card bawah</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->