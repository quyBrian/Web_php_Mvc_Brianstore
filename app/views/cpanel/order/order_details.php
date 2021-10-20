
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết đơn hàng </h1>
          </div>
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý đơn hàng </li>
              <li class="breadcrumb-item active">chi tiết đơn hàng </li>
            </ul>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Thông tin người đặt</h3>
              <!-- <a href="?php echo BASE_URL?>/post/add_post" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm bài viết</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#id</th>
                    <th>Tên người đặt </th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ghi chú</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=0;
                    foreach($orderinfo as $key =>$ordif){
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $ordif['name'] ?></td>
                    <td><?php echo $ordif['email'] ?></td>
                    <td><?php echo $ordif['sdt'] ?></td>
                    <td><?php echo $ordif['diachi'] ?></td>
                    <td><?php echo $ordif['noidung'] ?></td>
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách đơn hàng</h3>
              <!-- <a href="?php echo BASE_URL?>/post/add_post" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm bài viết</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#id</th>
                    <th>Tên sản phẩm </th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=0;
                    $total=0;
                    foreach($orderdetails as $key =>$ord){
                    $total+=$ord['price_product'] * $ord['quantity_product_details'];
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $ord['title_product'] ?></td>
                    <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $ord['image_product']?>" height="100px" width="100px"></td>
                    <td><?php echo $ord['quantity_product_details'] ?></td>
                    <td><?php echo number_format($ord['price_product'],0,',','.').'đ' ?></td>
                    <td><?php echo number_format($ord['price_product'] * $ord['quantity_product_details'],0,',','.').'đ' ?></td>
                  </tr>
                  <?php
                     }
                  ?>
                  <form action="<?php echo BASE_URL ?>/order/order_comfim/<?php echo $ord['code_order']?>" method="POST">
                  <tr>
                    <td><button  class="btn btn-primary float-right"><i class="fas fa-check-circle"> Xác nhận đơn hàng </i></button></td>
                    <td colspan="6" align="right" >Tổng tiền: <?php echo number_format($total,0,',','.').'đ' ?> </td>
                  </tr>
                  </form>
                  </tbody>
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
