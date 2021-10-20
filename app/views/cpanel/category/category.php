 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Danh Mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh mục sản phẩm</h3></br>
                

              </div>
              <div class="card-header">
                <label for="cars">Số lượng: </label>

                    <select name="cars" id="cars">
                        <option value="volvo">5</option>
                        <option value="saab">10</option>
                        <option value="mercedes">15</option>
                        <option value="audi">20</option>
                    </select>
                    <a href="<?php echo BASE_URL ?>/category/add_category_product" type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Thêm danh mục sản phẩm</a>
                <!-- <div class="card-tools">
                    
                </div> -->
                    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tên danh mục</th>
                      <th>Mô tả</th>
                      <th style="width:100px" >Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i=0;
                      foreach($category as $key => $cate){
                        $i++;
                    ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $cate['title_category_product']?></td>
                      <td><?php echo $cate['desc_category_product']?></td>
                      <td>
                        <a href="<?php echo BASE_URL ?>/category/edit_category_product/<?php echo $cate['id_category_product']?>" class="badge bg-success"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo BASE_URL ?>/category/delete_category_product/<?php echo $cate['id_category_product']?>" class="badge bg-danger" ><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh mục bài viết</h3></br>
                <?php
                    if(!empty($_GET['msg'])){
                        $msg= unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key=>$value){
                            echo'<span style="color:blue; font-weight:bold">'.$value.'</span>';
                        }
                    }
                ?>

              </div>
              <div class="card-header">
                <label for="cars">Số lượng: </label>

                    <select name="cars" id="cars">
                        <option value="volvo">5</option>
                        <option value="saab">10</option>
                        <option value="mercedes">15</option>
                        <option value="audi">20</option>
                    </select>
                    <a href="<?php echo BASE_URL ?>/category/add_category_post" type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Thêm danh mục sản phẩm</a>
                <!-- <div class="card-tools">
                    
                </div> -->
                    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tên danh mục</th>
                      <th>Mô tả</th>
                      <th style="width:100px" >Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $j=0;
                      foreach($categorypost as $key => $catepos){
                      $j++;
                    ?>
                    <tr>
                      <td><?php echo $j ?></td>
                      <td><?php echo $catepos['title_category_post']?></td>
                      <td><?php echo $catepos['desc_category_post']?></td>
                      <td>
                        <a href="<?php echo BASE_URL ?>/category/edit_category_post/<?php echo $catepos['id_category_post']?>" class="badge bg-success"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo BASE_URL ?>/category/delete_category_post/<?php echo $catepos['id_category_post']?>" class="badge bg-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
            <!-- /.card -->
            <!-- /.card -->
          </div>
          
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
