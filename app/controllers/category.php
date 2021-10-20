<?php
    class category extends DController{//danh muc bai viet + danh muc san pham in nay luon 
  
        public function __construct(){
            $message=array();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->category();
        }
        public function category(){
            Session::checkSession();
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $categorymodel= $this->load ->model('categorymodel');
            $table_category_product='tbl_category_product';
            $table_category_post='tbl_category_post';

            $data['category']=$categorymodel ->category($table_category_product);
            $data['categorypost']=$categorymodel ->categorypost($table_category_post);
            $this->load ->view('cpanel/category/category',$data);
            $this->load->view('cpanel/footer');
        }
         public function add_category_product(){
             Session::checkSession();
             $this->load->view('cpanel/header');
             $this->load->view('cpanel/menu');
             $this->load->view('cpanel/category/add_category_product');
             $this->load->view('cpanel/footer');
        }
        public function insert_category_product(){
            $title= $_POST['title_catedory_product'];
            $desc= $_POST['desc_catedory_product'];
            $table="tbl_category_product";
            $data= array(
                'title_category_product'=>$title,
                'desc_category_product'=>$desc
            );
            $categorymodel=$this->load->model('categorymodel');
            $result= $categorymodel->insertcategory($table, $data);
            if($result==1)
            {
                $message['msg']="thêm danh mục sản phẩm thành công ";
                header('Location:'. BASE_URL."/category?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="thêm danh mục sản phẩm thất bại ";
                header('Location:'. BASE_URL."/category?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_category_product($id){
		
            $table='tbl_category_product';
            $table_product='tbl_product';
            $cond="SELECT * FROM $table_product, $table  WHERE $table_product.id_category_product=$table.id_category_product='$id'";
            $categorymodel=$this->load->model('categorymodel');
    
            $result=$categorymodel->deletecategory($table,$cond);
            if ($result==1) {
                $message['msg']="Xóa danh mục sản phẩm thành công";
                header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Xóa danh mục sản phẩm thất bại";
                header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
            }
        }
        
        public function edit_category_product($id){
            $table='tbl_category_product';
            $cond="id_category_product='$id'";
            $categorymodel=$this->load->model('categorymodel');
            $data['categorybyid']=$categorymodel->categorybyid($table,$cond);
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/category/edit_category_product',$data);
            $this->load->view('cpanel/footer');
        }

        public function update_category_product($id){
            $table="tbl_category_product";
            $cond="id_category_product='$id'";

            $title= $_POST['title_category_product'];
            $desc= $_POST['desc_category_product'];

            $data= array(
                'title_category_product'=>$title,
                'desc_category_product'=>$desc
            );
            $categorymodel= $this->load->model('categorymodel');

            $result= $categorymodel->updatecategory($table, $data,$cond);
            if ($result==1) {
                $message['msg']="Cập nhật danh mục sản phẩm thành công";
                header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Cập nhật danh mục sản phẩm thất bại";
                header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
            }
        }
        
        //category post
        public function add_category_post(){
            Session::checkSession();
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/category/add_category_post');
            $this->load->view('cpanel/footer');
       }
       public function insert_category_post(){
        $title= $_POST['title_catedory_post'];
        $desc= $_POST['desc_catedory_post'];
        $table="tbl_category_post";
        $data= array(
            'title_category_post'=>$title,
            'desc_category_post'=>$desc
        );
        $categorymodel=$this->load->model('categorymodel');
        $result= $categorymodel->insertcategorypost($table, $data);
        if($result==1)
        {
            $message['msg']="thêm danh mục sản phẩm thành công ";
            header('Location:'. BASE_URL."/category?msg=".urlencode(serialize($message)));
        }
        else
        {
            $message['msg']="thêm danh mục sản phẩm thất bại ";
            header('Location:'. BASE_URL."/category/add_category_post?msg=".urlencode(serialize($message)));
        }
    }
    public function delete_category_post($id){
    
        $table='tbl_category_post';
        $table_post='tbl_post';
        $cond="SELECT * FROM $table_post, $table  WHERE $table_post.id_category_post=$table.id_category_post='$id'";
        $categorymodel=$this->load->model('categorymodel');

        $result=$categorymodel->deletecategorypost($table,$cond);
        if ($result==1) {
            $message['msg']="Xóa danh mục sản phẩm thành công";
            header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
        }
        else{
            $message['msg']="Xóa danh mục sản phẩm thất bại";
            header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
        }
    }
    
    public function edit_category_post($id){
        $table='tbl_category_post';
        $cond="id_category_post='$id'";
        $categorymodel=$this->load->model('categorymodel');
        $data['categorybyid']=$categorymodel->categorypostbyid($table,$cond);
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/category/edit_category_post',$data);
        $this->load->view('cpanel/footer');
    }

    public function update_category_post($id){
        $table="tbl_category_post";
        $cond="id_category_post='$id'";

        $title= $_POST['title_category_post'];
        $desc= $_POST['desc_category_post'];

        $data= array(
            'title_category_post'=>$title,
            'desc_category_post'=>$desc
        );
        $categorymodel= $this->load->model('categorymodel');

        $result= $categorymodel->updatecategorypost($table, $data,$cond);
        if ($result==1) {
            $message['msg']="Cập nhật danh mục sản phẩm thành công";
            header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
        }
        else{
            $message['msg']="Cập nhật danh mục sản phẩm thất bại";
            header("Location:".BASE_URL."/category/category?msg=".urlencode(serialize($message)));
        }
    }
    
       
        
    }


?>