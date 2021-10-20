<?php
    if(!empty($_GET['msg'])){
        $msg= unserialize(urldecode($_GET['msg']));
        foreach($msg as $key=>$value){
            echo'<span style="color:blue; font-weight:bold">'.$value.'</span>';
        }
    }
?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Bài Viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý bài viết</li>
              <li class="breadcrumb-item active">Thêm  bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Thêm bài viết</h3>
              </div>
              
              <div class="card-body">
                <form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Tên bài viết</label>
                        <input type="text" name="title_post" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hình ảnh</label>
                        <input type="file" name="image_post" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label Miêu for="pwd">Chi tiết bài viết</label>
                        <textarea type="text" name="content_post" rows="10" style="resize:none" class="form-control" id="editor"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Danh mục bài viết</label>
                        <select class="form-control" name="category_post">
                          <?php
                            foreach($category as $key =>$cate){
                          ?>
                            <option value ="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
                          <?php
                          }
                          ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-left">Thêm bài viết</button>
                </form>
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 