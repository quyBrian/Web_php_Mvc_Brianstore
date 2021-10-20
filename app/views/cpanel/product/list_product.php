  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
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
                <h3 class="card-title">Danh sách sản phẩm</h3>
                <a href="<?php echo BASE_URL?>/product/add_product" class="btn btn-primary float-right"><i  class="fas fa-plus"></i> Thêm sản phẩm</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="text-align:center; width:10px;">#id</th>
                    <th style="text-align:center;">Tên sản phẩm</th>
                    <th style="width:40px; text-align:center;">Hình ảnh</th>
                    <th style="text-align:center;">Danh mục</th>
                    <th style="width:20px; text-align:center;">Số lượng</th>
                    <th style="text-align:center;">Giá bán</th>
                    <th style="width:20px; text-align:center;">Giảm Giá</th>
                    <th style="text-align:center;">Giá Sau Giảm</th>
                    <th style="width:20px; text-align:center;">Hót</th>
                    <th style="text-align:center;">Tùy chọn</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=0;
                    foreach($product as $key =>$pro){
                    $i++;
                  ?>
                  <tr>
                  <td><?php echo $i ?></td>
                    <td><?php echo $pro['title_product'] ?></td>
                    <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" width="100"; height="100"></td>
                    <td><?php echo $pro['title_category_product']?></td>
                    <td><?php echo $pro['quantity_product']?></td>
                    <td><?php echo number_format($pro['price_product'],0,',','.').'đ' ?></td>
                    <td>
                        <?php
                        if($pro['discount_product']==0){
                          echo 'không';
                        }
                        else{
                          echo'có';
                        }
                        ?>
                    </td>
                    <td><?php echo number_format($pro['price_discount_product'],0,',','.').'đ' ?></td>
                    <td>
                        <?php
                        if($pro['hot_product']==0){
                          echo 'không';
                        }
                        else{
                          echo'có';
                        }
                        ?>
                    </td>
                    <td>
                      <a href="<?php echo BASE_URL  ?>/product/edit_product/<?php echo $pro['id_product'] ?>"  class="badge bg-success"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo BASE_URL  ?>/product/delete_product/<?php echo $pro['id_product'] ?>" class="badge bg-danger"><i class="fas fa-trash"></i></a>
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