<?php
    class user extends DController{
        public function __construct(){
            parent::__construct();
            Session::checkSession();
        }
        public function index(){
            $this->user();
        }
        public function user(){
            $this->load ->view('cpanel/header');
            $this->load ->view('cpanel/menu');
            
            $table="tbl_customers";

            $homemodel= $this->load ->model('homemodel');
            $data['customer']=$homemodel ->customer($table);

            $this->load ->view('cpanel/user/list_user',$data);
            $this->load ->view('cpanel/footer');

        }
        public function add_product(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $table="tbl_category_product";
            $categorymodel=$this->load->model('categorymodel');
            $data['category']= $categorymodel->category($table);

            $this->load->view('cpanel/product/add_product', $data);
            $this->load->view('cpanel/footer');
        }
        public function insert_product(){
            $title= $_POST['title_product'];
            $price= $_POST['price_product']; 
            $desc= $_POST['desc_product'];
            $quantity= $_POST['quantity_product'];
            $hot= $_POST['hot_product'];


            
            $image= $_FILES['image_product']['name'];
            $tmp_image= $_FILES['image_product']['tmp_name'];

            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;

            $path_uploads="public/uploads/product/".$unique_image;

            $category= $_POST['category_product'];

            $table="tbl_product";
            $data= array(
                 'title_product'=>$title,
                 'price_product'=>$price,
                 'desc_product'=>$desc,
                 'quantity_product'=>$quantity,
                 'image_product'=>$unique_image,
                 'id_category_product'=>$category,
                 'hot_product'=>$hot
            );
            $productmodel=$this->load->model('productmodel');
            $result= $productmodel->insertproduct($table, $data);
            if($result==1)
            {
                move_uploaded_file($tmp_image,$path_uploads);
                $message['msg']="thêm danh mục sản phẩm thành công ";
                header('Location:'. BASE_URL."/product?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="thêm danh mục sản phẩm thất bại ";
                header('Location:'. BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_product($id){
		
            $table='tbl_product';
            $cond="id_product='$id'";
            $productmodel=$this->load->model('productmodel');
    
            $result=$productmodel->deleteproduct($table,$cond);
            if ($result==1) {
                $message['msg']="Xóa sản phẩm thành công";
                header("Location:".BASE_URL."/product?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Xóa sản phẩm thất bại";
                header("Location:".BASE_URL."/product?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_product($id){
            $table='tbl_product';
            $cond="id_product='$id'";
            $table_category="tbl_category_product";
            $productmodel=$this->load->model('productmodel');
            $categorymodel=$this->load->model('categorymodel');
            $data['productbyid']=$productmodel->productbyid($table,$cond);
            $data['category']=$categorymodel->category($table_category);
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/product/edit_product',$data);
            $this->load->view('cpanel/footer');
        }
        public function update_product($id){
            $table="tbl_product";
            $cond="id_product='$id'";
            $productmodel= $this->load->model('productmodel');

            $title= $_POST['title_product'];
            $price= $_POST['price_product']; 
            $desc= $_POST['desc_product'];
            $quantity= $_POST['quantity_product'];
            $category= $_POST['category_product'];
            $hot= $_POST['hot_product'];

            $image= $_FILES['image_product']['name'];
            $tmp_image= $_FILES['image_product']['tmp_name'];
            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;
            $path_uploads="public/uploads/product/".$unique_image;
            if($image){
                $data['productbyid']= $productmodel->productbyid($table,$cond);
                foreach($data['productbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/product/";
                        unlink($path_unlink.$value['image_product']);
                }
                $data= array(
                    'title_product'=>$title,
                    'price_product'=>$price,
                    'desc_product'=>$desc,
                    'quantity_product'=>$quantity,
                    'image_product'=>$unique_image,
                    'id_category_product'=>$category,
                    'hot_product'=>$hot
                );
                move_uploaded_file($tmp_image,$path_uploads);
            }
            else{
                $data= array(
                    'title_product'=>$title,
                    'price_product'=>$price,
                    'desc_product'=>$desc,
                    'quantity_product'=>$quantity,
                    //'image_product'=>$unique_image,
                    'id_category_product'=>$category,
                    'hot_product'=>$hot
                );
            }
            
            $result= $productmodel->updateproduct($table, $data, $cond);
            if ($result==1) {
                
                $message['msg']="Cập nhật sản phẩm thành công";
                header("Location:".BASE_URL."/product?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Cập nhật sản phẩm thất bại";
                header("Location:".BASE_URL."/product/edit_product?msg=".urlencode(serialize($message)));
            }
        }


        
    }


?>