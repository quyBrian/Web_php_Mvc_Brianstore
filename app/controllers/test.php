<?php
    class test extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->demo();
        }
        public function demo(){
            //Session::init();
                    $table="tbl_category_product"; 
                    $table_product="tbl_product";
                    
                    $categorymodel= $this->load ->model('categorymodel');
                    $data['categoryhome']= $categorymodel->categoryhome($table);
                    $table_post="tbl_category_post";
                    $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
                    //$data['listproducthome']= $categorymodel->listproducthome($table_product);
                    //$data['listproductall']= $categorymodel->listproducthome($table_product);
                    $homemodel= $this->load ->model('homemodel');
                    $data['allproduct']= $homemodel->allproduct($table_product);
                    $data['countproduct']= $homemodel->countproduct($table_product);

                    $this->load ->view('header');
                    $this->load ->view('menu',$data);
                    $this->load ->view('test',$data);
                    $this->load ->view('footer');
                }
        }
?>
