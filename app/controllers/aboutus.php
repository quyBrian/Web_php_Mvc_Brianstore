<?php
    class aboutus extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->about();
        }
        public function about(){
            Session::init();
            
            $categorymodel= $this->load ->model('categorymodel');
            $slidermodel= $this->load ->model('slidermodel');
            $aboutmodel= $this->load ->model('aboutmodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_product="tbl_product";
            $post="tbl_post";
            $table_slider="tbl_slider";
            $table="tbl_about";

            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['hotproduct']= $categorymodel->hotproduct($table_product);
            $data['newsposthome']= $categorymodel->newsposthome($post);
            $data['newsproducthome']= $categorymodel->newsproducthome($table_product);
            $data['newsliderhome']= $slidermodel->newsliderhome($table_slider);
            $data['about']= $aboutmodel->about($table);


            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('about',$data);
            $this->load ->view('footer');
        }

    }


?>