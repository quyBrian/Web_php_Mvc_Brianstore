<?php
    class news extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
        }
        public function categorynews($id){
            Session::init();

            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_post_home="tbl_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['categoryposthomebyid']= $categorymodel->categoryposthomebyid( $table_post,$table_post_home,$id);
            
             $this->load ->view('header');
             $this->load ->view('menu', $data);
             $this->load ->view('categorypost',$data);
             //$this->load ->view('test',$data);
             $this->load ->view('footer');
        }
        public function newsdetails($id){
            Session::init();
            
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_post_home="tbl_post";
            $cond ="$table_post.id_category_post= $table_post_home.id_category_post AND $table_post_home.id_post='$id' ";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['categoryposthomebyid']= $categorymodel->categoryposthomebyid($table_post,$table_post_home,$id);
            $data['detailsposthome']= $categorymodel->detailsposthome($table_post,$table_post_home, $cond);

            foreach($data['detailsposthome'] as $key =>$cate){
                $id_cate=$cate['id_category_post'];
            }
            $cond_related="$table_post.id_category_post= $table_post_home.id_category_post AND $table_post.id_category_post = '$id_cate' 
            AND $table_post_home.id_post NOT IN('$id')";
            $data['relatedposthome']= $categorymodel->relatedposthome($table_post,$table_post_home,$cond_related);
    


            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('details_post',$data);
            $this->load ->view('footer');
        }
        public function allpost(){
            Session::init();
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_post_home="tbl_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['listposthome']= $categorymodel->listposthome( $table_post_home);
            
             $this->load ->view('header');
             $this->load ->view('menu', $data);
             $this->load ->view('list_post',$data);
             $this->load ->view('footer');
        }
    }


?>