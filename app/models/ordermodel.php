<?php
    class ordermodel extends DModel{
        public function __construct()
        {
           parent::__construct();
        }
        // order user
        public function insertorder($table_order,$data_order){
            return $this ->db ->insert($table_order, $data_order);
        }
        public function insertorderdetails($table_order_details,$data_details){
            return $this ->db ->insert($table_order_details, $data_details);
        }
        //list order admin
        public function listorder($table_order){
            $sql="SELECT * FROM $table_order ORDER BY id_order DESC";
            return $this->db->select($sql);
        }
        public function orderdetails($table_product,$table_order_details,$cond){
            $sql="SELECT * FROM $table_order_details, $table_product WHERE $cond";
            return $this->db->select($sql);
        }
        public function orderinfo($table_order_details,$cond_info){
            $sql="SELECT * FROM $table_order_details WHERE $cond_info LIMIT 1";
            return $this->db->select($sql);
        }
        public function order_comfim($table_order, $data, $cond){
            return $this->db->update($table_order, $data, $cond);
        }
        //search detail oder
        // public function searchdetailoder($table_order_details,$cond){
        //     $sql="SELECT * FROM $table_order_details WHERE id_product=$cond ";
        //     return $this->db->select($sql);
        // }

    }
?>