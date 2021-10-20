<?php
    class about extends DController{
        public function __construct(){
            parent::__construct();
            Session::checkSession();
        }
        public function index(){
            $this->about();
        }
        public function about(){
            $this->load ->view('cpanel/header');
            $this->load ->view('cpanel/menu');
            
            $table="tbl_about";

            $aboutmodel= $this->load ->model('aboutmodel');
            $data['about']=$aboutmodel ->about($table);

            $this->load ->view('cpanel/about/about',$data);
            $this->load ->view('cpanel/footer');

        }
        public function edit_about($id){
            $table='tbl_about';
            $cond="id_about='$id'";
            $aboutmodel=$this->load->model('aboutmodel');
            $data['aboutbyid']=$aboutmodel->aboutbyid($table,$cond);
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/about/edit_about',$data);
            $this->load->view('cpanel/footer');
        }
        public function update_about($id){
            $table="tbl_about";
            $cond="id_about='$id'";
            $aboutmodel= $this->load->model('aboutmodel');

            $title= $_POST['title_about'];
            $content= $_POST['content_about']; 

            $image= $_FILES['image_about']['name'];
            $tmp_image= $_FILES['image_about']['tmp_name'];
            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;
            $path_uploads="public/uploads/about/".$unique_image;
            if($image){
                $data['aboutbyid']= $aboutmodel->aboutbyid($table,$cond);
                foreach($data['aboutbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/about/";
                        unlink($path_unlink.$value['image_about']);
                }
                $data= array(
                    'title_about'=>$title,
                    'content_about'=>$content,
                    'image_about'=>$unique_image
                );
                move_uploaded_file($tmp_image,$path_uploads);
            }
            else{
                $data= array(
                    'title_about'=>$title,
                    'content_about'=>$content
                );
            }
            
            $result= $aboutmodel->updateabout($table, $data, $cond);
            if ($result==1) {
                
                $message['msg']="Cập nhật sản phẩm thành công";
                header("Location:".BASE_URL."/about?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Cập nhật sản phẩm thất bại";
                header("Location:".BASE_URL."/about/edit_about?msg=".urlencode(serialize($message)));
            }
        }


        public function test(){
            $table_product="tbl_product";
            $table_category_product="tbl_category_product";

            $productmodel= $this->load ->model('productmodel');
            $data['product']=$productmodel ->product($table_product,$table_category_product);

            $this->load->view('cpanel/test', $data);
        }
    }


?>