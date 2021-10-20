<?php
    class productus extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
        }
        public function categoryus($id){
            Session::init();
            
            $table="tbl_category_product";
            $table_product="tbl_product";
            $categorymodel= $this->load ->model('categorymodel');
            $data['categoryhome']= $categorymodel->categoryhome($table);
            $table_post="tbl_category_post";
            // $cond= "$table_home.id_category_product=$table_product.id_category_product AND $table_product.id_product=$id";
            
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['categoryhomebyid']= $categorymodel->categoryhomebyid($table,$table_product,$id);
            $data['countproductcategory']=$categorymodel->countproductcategory($table_product,$id);
            
            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('categoryproduct',$data);
            $this->load ->view('footer');
        }
        public function productdetails($id){
            Session::init();
            
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_product="tbl_product";
            $table_post="tbl_category_post";
            $cond= "$table_product.id_category_product= $table_home.id_category_product AND $table_product.id_product='$id'";
            
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['detailsproduct']= $categorymodel->detailsproduct( $table_home,$table_product,$cond);
             
            foreach($data['detailsproduct'] as $key =>$cate){
                $id_cate=$cate['id_category_product'];
            }
            $cond_related="$table_product.id_category_product= $table_home.id_category_product AND $table_home.id_category_product = '$id_cate' 
            AND $table_product.id_product NOT IN('$id')";
            $data['relatedproducthome']= $categorymodel->relatedproducthome( $table_home,$table_product,$cond_related);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('details_product',$data);
            $this->load ->view('footer');
        }
        public function allproduct(){
            Session::init();
 
            $table="tbl_category_product";
            $table_product="tbl_product";
            $categorymodel= $this->load ->model('categorymodel');
            $data['categoryhome']= $categorymodel->categoryhome($table);
            $table_post="tbl_category_post";
            // $cond= "$table_home.id_category_product=$table_product.id_category_product AND $table_product.id_product=$id";
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);
            $data['listproducthome']= $categorymodel->listproducthome($table_product);
            $data['countproduct']= $categorymodel->countproduct($table_product);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('list_product',$data);
            $this->load ->view('footer');
        }
        
    }


?>