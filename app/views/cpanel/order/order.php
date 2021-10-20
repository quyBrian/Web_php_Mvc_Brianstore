
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý đơn hàng</h1>
          </div>
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý đơn hàng </li>
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
                <h3 class="card-title">Danh sách đơn hàng</h3>
              <!-- <a href="<?php echo BASE_URL?>/post/add_post" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm bài viết</a> -->
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#id</th>
                    <th >Code đơn hàng </th>
                    <th>Ngày đặt</th>
                    <th>Tình trạng đơn hàng </th>
                    <th>Quản lý</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=0;
                    foreach($listorder as $key =>$ord){
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $ord['code_order'] ?></td>
                    <td><?php echo $ord['date_order'] ?></td>
                    <td><?php if( $ord['status_order']==0){echo 'Đơn hàng mới';} else{ echo 'Đã xác nhận';} ?></td>
                    
                    <td>
                      <a href="<?php echo BASE_URL  ?>/order/order_details/<?php echo $ord['code_order'] ?>"  class="badge bg-success"><i class="fas fa-eye"></i></i></a>
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
