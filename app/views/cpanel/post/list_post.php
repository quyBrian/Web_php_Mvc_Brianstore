
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
              <li class="breadcrumb-item active">Quản lý bài viết</li>
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
                <h3 class="card-title">Danh sách bài viết</h3>
              <a href="<?php echo BASE_URL?>/post/add_post" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm bài viết</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#id</th>
                    <th>Tên bài viêt</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Tùy chọn</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=0;
                    foreach($post as $key =>$pro){
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $pro['title_post'] ?></td>
                    <td><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pro['image_post'] ?>" width="100"; height="100"></td>
                    <td><?php echo $pro['title_category_post'] ?></td>
                    <td>
                      <a href="<?php echo BASE_URL  ?>/post/edit_post/<?php echo $pro['id_post'] ?>"  class="badge bg-success"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo BASE_URL  ?>/post/delete_post/<?php echo $pro['id_post'] ?>" class="badge bg-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php
                     }
                  ?>
                  </tbody>
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
