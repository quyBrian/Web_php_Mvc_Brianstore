<?php
    class index extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->homepage();
        }
        public function homepage(){
            Session::init();
            $categorymodel= $this->load ->model('categorymodel');
            $slidermodel= $this->load ->model('slidermodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_product="tbl_product";
            $post="tbl_post";
            $table_slider="tbl_slider";

            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['hotproduct']= $categorymodel->hotproduct($table_product);
            $data['discountproduct']=$categorymodel->discountproduct($table_product);
            $data['newsposthome']= $categorymodel->newsposthome($post);
            $data['newsproducthome']= $categorymodel->newsproducthome($table_product);
            $data['newsliderhome']= $slidermodel->newsliderhome($table_slider);


            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('slider',$data);
            $this->load ->view('home',$data);
            $this->load ->view('footer');
        }
        public function notfound(){
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('404');
            $this->load ->view('footer');
        }
        public function contact(){
            Session::init();
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('contact');
            $this->load ->view('footer');
        }
        

    }


?>