<?php
    class searchmodel extends DModel{
        public function __construct(){
           parent::__construct();
        }
        // category_product
        public function searchproduct($table_product,$tukhoa){
            $sql="SELECT * FROM $table_product WHERE title_product LIKE '%$tukhoa%' ";
            return $this->db->select($sql);
        }
        public function searchpost($table_post,$tukhoa){
            $sql="SELECT * FROM $table_post WHERE title_post LIKE '%$tukhoa%' ";
            return $this->db->select($sql);
        }
        //customer
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
        
    }

?>