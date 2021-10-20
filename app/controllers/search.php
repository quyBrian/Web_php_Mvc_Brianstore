<?php
    class search extends DController{
        public function __construct(){
            parent::__construct();
            //Session::checkSession();
        }
        public function index(){
        }
        public function search(){
            Session:: init();
            
            $tukhoa=$_GET['tukhoa'];
            $categorymodel= $this->load ->model('categorymodel');
            $searchmodel= $this->load ->model('searchmodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_product="tbl_product";

            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['searchproduct']=$searchmodel->searchproduct($table_product,$tukhoa);
            $data['searchpost']=$searchmodel->searchpost($table_post,$tukhoa);


            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('search',$data);
            $this->load ->view('footer');
        }
    }
?>