<?php
    class post extends DController{
        public function __construct(){
            parent:: __construct();
            Session::checkSession();
        }
        public function index(){
            $this-> post();
        }
        public function post(){
            $this->load ->view('cpanel/header');
            $this->load ->view('cpanel/menu');
            
            $table_post="tbl_post";
            $table_category_post="tbl_category_post";

            $postmodel= $this->load ->model('postmodel');
            $data['post']=$postmodel ->post($table_post,$table_category_post);

            $this->load ->view('cpanel/post/list_post',$data);
            $this->load ->view('cpanel/footer');

        }
        public function add_post(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table="tbl_category_post";
            $categorymodel=$this->load->model('categorymodel');
            $data['category']= $categorymodel->categorypost($table);

            $this->load->view('cpanel/post/add_post', $data);
            $this->load->view('cpanel/footer');
        }
        public function insert_post(){
            $title= $_POST['title_post'];
            $content= $_POST['content_post'];
    
            
            $image= $_FILES['image_post']['name'];
            $tmp_image= $_FILES['image_post']['tmp_name'];
    
            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;
    
            $path_uploads="public/uploads/post/".$unique_image;
    
            $category= $_POST['category_post'];
    
            $table="tbl_post";
            $data= array(
                 'title_post'=>$title,
                 'content_post'=>$content,
                 'image_post'=>$unique_image,
                 'id_category_post'=>$category
            );
            $postmodel=$this->load->model('postmodel');
            $result= $postmodel->insertpost($table, $data);
            if($result==1)
            {
                move_uploaded_file($tmp_image,$path_uploads);
                $message['msg']="thêm bài viết thành công ";
                header('Location:'. BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="thêm bài viết thất bại ";
                header('Location:'. BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_post($id){
            $table='tbl_post';
            $cond="id_post='$id'";
            $postmodel=$this->load->model('postmodel');
    
            $result=$postmodel->deletepost($table,$cond);
            if ($result==1) {
                $message['msg']="Xóa bài viết thành công";
                header("Location:".BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Xóa bài viết thất bại";
                header("Location:".BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_post($id){
            $table='tbl_post';
            $cond="id_post='$id'";
            $table_category="tbl_category_post";
            $postmodel=$this->load->model('postmodel');
            $categorymodel=$this->load->model('categorymodel');

            $data['category_post']=$categorymodel->categorypost($table_category);
            $data['postbyid']=$postmodel->postbyid($table,$cond);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/post/edit_post',$data);
            $this->load->view('cpanel/footer');
        }
        public function update_post($id){
            $table="tbl_post";
            $cond="id_post='$id'";
            $postmodel=$this->load->model('postmodel');
            
            $title= $_POST['title_post'];
            $content= $_POST['content_post'];
            $category= $_POST['category_post'];
            $image= $_FILES['image_post']['name'];
            $tmp_image= $_FILES['image_post']['tmp_name'];
            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;
            $path_uploads="public/uploads/post/".$unique_image;
            if($image){
                $data['postbyid']=$postmodel->postbyid($table,$cond);
                foreach($data['postbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/post/";
                        unlink($path_unlink.$value['image_post']);
                }
                $data= array(
                    'title_post'=>$title,
                    'content_post'=>$content,
                    'image_post'=>$unique_image,
                    'id_category_post'=>$category
                );
                move_uploaded_file($tmp_image,$path_uploads);
             }
             else{
                $data= array(
                    'title_post'=>$title,
                    'content_post'=>$content,
                    // 'image_post'=>$unique_image,
                    'id_category_post'=>$category
                );
             }
           
            $result= $postmodel->updatepost($table, $data, $cond);
            if($result==1)
            {
                $message['msg']="Cập nhật bài viết thành công ";
                header('Location:'. BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="Cập nhật bài viết thất bại ";
                header('Location:'. BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
            }
        }

        

    }
    
?>