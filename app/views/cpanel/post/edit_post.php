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
              <li class="breadcrumb-item active">Cập nhật bài viết</li>
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
                <h3 class="card-title">Cập nhật bài viết</h3>
              </div>
              <div class="card-body">
              <?php
                foreach($postbyid as $key => $pos){
              ?>
                <form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $pos['id_post'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Tên bài viết</label>
                        <input type="text" value="<?php echo $pos['title_post'] ?>" name="title_post" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hình ảnh</label>
                        <input type="file" name="image_post" class="form-control" id="email">
                        <p><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" width="100"; height="100"></p>
                    </div>
                    <div class="form-group">
                        <label Miêu for="pwd">Chi tiết bài viết sản phảm</label>
                        <textarea type="text"  name="content_post" rows="10" style="resize:none" class="form-control" id="editor"><?php echo $pos['content_post'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Danh mục bài viết</label>
                        <select class="form-control" value="<?php echo $pos['id_category_post'] ?>" name="category_post">
                          <?php
                            foreach($category_post as $key =>$cate){
                          ?>
                            <option <?php if($cate['id_category_post']==$pos['id_category_post']) { echo 'selected';} ?> value ="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
                          <?php
                          }
                          ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-left">Cập nhật bài viết</button>
                </form>
                <?php
                }
                ?>
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
 