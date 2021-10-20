<?php
    class postmodel extends DModel{
        public function __construct()
        {
           parent::__construct();
        }
        public function post($table_post,$table_category_post){
            $sql="SELECT * FROM $table_post,$table_category_post WHERE $table_post.id_category_post=$table_category_post.id_category_post  ORDER BY $table_post.id_post DESC";
            return $this->db->select($sql);
        }
        public function postbyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }
        public function insertpost($table, $data){
            return $this ->db ->insert($table, $data);
        }
        public function updatepost($table, $data, $cond){
            return $this ->db ->update($table, $data, $cond);
        }
        public function deletepost($table,$cond){
            return $this->db->delete($table,$cond);
        }
        
        

    }

?>