
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Slider</h1>
          </div>
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý Slider1</li>
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
                <h3 class="card-title">Danh sách Sline</h3>
                <a href="<?php echo BASE_URL?>/slider/add_slider" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm sản phẩm</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#id</th>
                      <th style="width:400px">Tên Sline</th>
                      <th>Hình ảnh</th>
                      <th>Tùy chọn</th>
                    </tr>
                  </thead>
                  <?php
                    $i=0;
                    foreach($slider as $key =>$sli){
                    $i++;
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $sli['title_slider'] ?></td>
                      <td><img src="<?php echo BASE_URL ?>/public/uploads/slider/<?php echo $sli['image_slider'] ?>" width="300"; height="100"></td>
                      <td>
                        <a href="<?php echo BASE_URL ?>/slider/edit_slider/<?php echo $sli['id_slider'] ?>"  class="badge bg-success"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo BASE_URL ?>/slider/delete_slider/<?php echo $sli['id_slider'] ?>" class="badge bg-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <?php
                     }
                  ?>
                </table>

                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                  </div>

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
