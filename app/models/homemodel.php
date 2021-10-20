<?php
    class homemodel extends DModel{
        public function __construct()
        {
           parent::__construct(); 
        }
        // list product
        public function allproduct($table_product){
            $sp_tungtrang=6;
            if(!isset($_GET['trang'])){
               $trang=1;
            }
            else{
                $trang=$_GET['trang'];
            }
            $tung_trang=($trang-1)*6;
            $sql="SELECT * FROM $table_product ORDER BY id_product DESC LIMIT $tung_trang,$sp_tungtrang";
            return $this->db->select($sql);
        }
        //count product
        public function countproduct($table_product){
            $sql="SELECT * FROM $table_product  ";
            return $this->db->select($sql);
        }

        //user admin 
        public function customer($table){
            $sql="SELECT * FROM $table ORDER BY id_customer DESC";
            return $this->db->select($sql);
        }
        public function productbyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }
        public function insertproduct($table, $data){
            return $this ->db ->insert($table, $data);
           
        }
        public function updateproduct($table, $data, $cond){
            return $this ->db ->update($table, $data, $cond);
        }
        public function deleteproduct($table,$cond){
            return $this->db->delete($table,$cond);
        }
       


    }
?>