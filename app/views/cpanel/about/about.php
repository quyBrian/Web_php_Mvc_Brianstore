
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Sản Phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ul>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#id</th>
                    <th>Tiêu đề</th>
                    <th>Hình ảnh</th>
                    <th>Tùy chọn</th>
                  </tr>
                  </thead>
                  <?php
                    $i=0;
                    foreach($about as $key =>$ab){
                    $i++;
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $ab['title_about'] ?></td>
                    <td><img src="<?php echo BASE_URL ?>/public/uploads/about/<?php echo $ab['image_about'] ?>" width="100"; height="100"></td>
                    <td>
                      <a href="<?php echo BASE_URL  ?>/about/edit_about/<?php echo $ab['id_about'] ?>"  class="badge bg-success"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php
                     }
                  ?>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
