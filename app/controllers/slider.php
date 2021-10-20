<?php
    class slider extends DController{
        public function __construct(){
            parent::__construct();
            Session::checkSession();
        }
        public function index(){
            $this->slider();
        }
        public function slider(){
            $this->load ->view('cpanel/header');
            $this->load ->view('cpanel/menu');

            $table="tbl_slider";
            $slidermodel= $this->load ->model('slidermodel');
            $data['slider']=$slidermodel ->slider($table);

            $this->load ->view('cpanel/slider/list_slider1',$data);
            $this->load ->view('cpanel/footer');
        }
        public function add_slider(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/slider/add_slider');
            $this->load->view('cpanel/footer');
        }
        public function insert_slider(){
            $title= $_POST['title_slider'];

            $image = $_FILES['image_slider']['name'];
            $tmp_image = $_FILES['image_slider']['tmp_name'];
            
            $div = explode('.', $image);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;

            $path_uploads = "public/uploads/slider/".$unique_image;

            $table="tbl_slider";
            $data= array(
                 'title_slider'=>$title,
                 'image_slider'=>$unique_image
            );
            $slidermodel=$this->load->model('slidermodel');
            $result= $slidermodel->insertslider($table, $data);
            if($result==1)
            {
                move_uploaded_file($tmp_image,$path_uploads);
                $message['msg']="thêm slider thành công ";
                header('Location:'. BASE_URL."/slider?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="thêm slider thất bại ";
                header('Location:'. BASE_URL."/slider/add_slider?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_slider($id){
		
            $table='tbl_slider';
            $cond="id_slider='$id'";
            $slidermodel=$this->load->model('slidermodel');
    
            $result=$slidermodel->deleteslider($table,$cond);
            if ($result==1) {
                $message['msg']="Xóa sản phẩm thành công";
                header("Location:".BASE_URL."/slider?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Xóa sản phẩm thất bại";
                header("Location:".BASE_URL."/slider?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_slider($id){
            $table='tbl_slider';
            $cond="id_slider='$id'";
            
            $slidermodel=$this->load->model('slidermodel');
            $data['sliderbyid']=$slidermodel->sliderbyid($table,$cond);
            
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/slider/edit_slider',$data);
            $this->load->view('cpanel/footer');
        }
        public function update_slider($id){
            $table="tbl_slider";
            $cond="id_slider='$id'";
            $slidermodel= $this->load->model('slidermodel');

            $title= $_POST['title_slider'];
            

            $image= $_FILES['image_slider']['name'];
            $tmp_image= $_FILES['image_slider']['tmp_name'];
            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;
            $path_uploads="public/uploads/slider/".$unique_image;
            if($image){
                $data['sliderbyid']= $slidermodel->sliderbyid($table,$cond);
                foreach($data['sliderbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/slider/";
                        unlink($path_unlink.$value['image_slider']);
                }
                $data= array(
                    'title_slider'=>$title,
                    'image_slider'=>$unique_image
                    
                );
                move_uploaded_file($tmp_image,$path_uploads);
            }
            else{
                $data= array(
                    'title_slider'=>$title
                    //'image_product'=>$unique_image,
                );
            }
            
            $result= $slidermodel->updateslider($table, $data, $cond);
            if ($result==1) {
                
                $message['msg']="Cập nhật sản phẩm thành công";
                header("Location:".BASE_URL."/slider?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Cập nhật sản phẩm thất bại";
                header("Location:".BASE_URL."/slider/edit_slider?msg=".urlencode(serialize($message)));
            }
        }


    }
?>