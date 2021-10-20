<?php
    class categorymodel extends DModel{
        public function __construct(){
           parent::__construct();
        }
        // category_product
        public function category($table){
            $sql="SELECT * FROM $table ORDER BY id_category_product DESC";
            return $this->db->select($sql);
        }
        public function categorybyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }
        public function insertcategory($table_category_product, $data){
            return $this ->db ->insert($table_category_product, $data);
        }
        public function updatecategory($table_category_product, $data, $cond){
            return $this ->db ->update($table_category_product, $data, $cond);
        }
        public function deletecategory($table_category_product,$cond){
            return $this->db->delete($table_category_product,$cond);
        }

        // home _ product (catgory, list)
        public function categoryhome($table){
            $sql="SELECT * FROM $table ORDER BY id_category_product DESC";
            return $this->db->select($sql);
        }
        public function categoryhomebyid($table,$table_product,$id){
            $sp_tungtrang=8;
            if(!isset($_GET['trang'])){
               $trang=1;
            }
            else{
                $trang=$_GET['trang'];
            }
            $tung_trang=($trang-1)*8;
            $sql="SELECT * FROM $table,$table_product WHERE $table.id_category_product=$table_product.id_category_product 
            AND $table_product.id_category_product='$id' ORDER BY $table_product.id_product DESC LIMIT $tung_trang,$sp_tungtrang";
            return $this ->db ->select($sql);
        }
        //count product home follow category
        public function countproductcategory($table_product, $id){
            $sql="SELECT * FROM $table_product WHERE $table_product.id_category_product=$id";
            return $this->db->select($sql);
        }
        // list product
        public function listproducthome($table_product){
            $sp_tungtrang=6;
            if(!isset($_GET['trang'])){
               $trang=1;
            }
            else{
                $trang=$_GET['trang'];
            }
            $tung_trang=($trang-1)*6;
            $sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC LIMIT $tung_trang,$sp_tungtrang ";
            return $this ->db ->select($sql);
        }
        //count product
        public function countproduct($table_product){
            $sql="SELECT * FROM $table_product ";
            return $this->db->select($sql);
        }
        //home_ details product
        public function detailsproduct( $table_home,$table_product,$cond){
            $sql="SELECT * FROM $table_home,$table_product WHERE $cond";
            return $this ->db ->select($sql);
        }
        // same producct
        public function relatedproducthome( $table_home,$table_product,$cond_related){
            $sql="SELECT * FROM $table_home,$table_product WHERE $cond_related ORDER BY $table_product.id_product DESC";
            return $this ->db ->select($sql);
        }
        //hot product
        public function hotproduct($table_product){
            $sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC ";
            return $this ->db ->select($sql);
        }
        //hot product
        public function discountproduct($table_product){
            $sql="SELECT * FROM $table_product ORDER BY $table_product.id_product DESC ";
            return $this ->db ->select($sql);
        }
        //new product home
        public function newsproducthome($table_product){
            $sql="SELECT * FROM $table_product ORDER BY id_product DESC LIMIT 5";
            return $this ->db ->select($sql);
        }

        // category_post
        public function categorypost($table){
            $sql="SELECT * FROM $table ORDER BY id_category_post DESC";
            return $this->db->select($sql);
        }
        public function categorypostbyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }
        public function insertcategorypost($table_category_product, $data){
            return $this ->db ->insert($table_category_product, $data);
        }
        public function updatecategorypost($table_category_product, $data, $cond){
            return $this ->db ->update($table_category_product, $data, $cond);
        }
        public function deletecategorypost($table_category_product,$cond){
            return $this->db->delete($table_category_product,$cond);
        }
         // home _ post (catgory, list)
         public function categoryposthome($table){
            $sql="SELECT * FROM $table ORDER BY id_category_post DESC";
            return $this->db->select($sql);
        }
        public function categoryposthomebyid($table_post,$table_post_home,$id){
            $sql="SELECT * FROM $table_post,$table_post_home WHERE $table_post.id_category_post=$table_post_home.id_category_post 
            AND $table_post_home.id_category_post='$id' ORDER BY $table_post_home.id_post DESC ";
            return $this ->db ->select($sql);
        }
        public function listposthome($table_post_home){
            $sql="SELECT * FROM $table_post_home ORDER BY $table_post_home.id_post DESC ";
            return $this ->db ->select($sql);
        }
        //home_ details post
        public function detailsposthome($table_post,$table_post_home, $cond){
            $sql="SELECT * FROM $table_post,$table_post_home WHERE $cond";
            return $this ->db ->select($sql);
        }
        // same post
        public function relatedposthome($table_post,$table_post_home,$cond_related){
            $sql="SELECT * FROM $table_post,$table_post_home WHERE $cond_related ORDER BY $table_post_home.id_post DESC";
            return $this ->db ->select($sql);
        }
        // new post home
        public function newsposthome($post){
            $sql="SELECT * FROM $post ORDER BY id_post DESC LIMIT 5";
            return $this ->db ->select($sql);
        }


    }

?>