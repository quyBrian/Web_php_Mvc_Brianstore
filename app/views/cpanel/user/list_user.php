<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý người dùng </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý người dùng </li>
            </ol>
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
                <h3 class="card-title">Danh sách người dùng</h3>
                <a href="<?php echo BASE_URL?>/product/add_product" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm người dùng</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#id</th>
                    <th>Tên người dùng</th>
                    <th>Hình ảnh</th>
                    <th>Số điện thoại</th>
                    <th>email</th>
                    <th>Địa chỉ</th>
                    <th>Tùy chọn</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=0;
                    foreach($customer as $key =>$cus){
                    $i++;
                  ?>
                  <tr>
                  <td><?php echo $i ?></td>
                    <td><?php echo $cus['name_customer'] ?></td>
                    <td><img src="<?php echo BASE_URL ?>/public/uploads/customer/<?php echo $cus['image_customer'] ?>" width="100"; height="100"></td>
                    <td><?php echo $cus['phone_customer']?></td>
                    <td><?php echo $cus['email_customer']?></td>
                    <td><?php echo $cus['address_customer']?></td>
                    <td>
                      <a href="<?php echo BASE_URL  ?>/user/edit_customer/<?php echo $cus['id_product'] ?>"  class="badge bg-success"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo BASE_URL  ?>/user/delete_customer/<?php echo $cus['id_product'] ?>" class="badge bg-danger"><i class="fas fa-trash"></i></a>
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