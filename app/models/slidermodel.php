<?php
    class slidermodel extends DModel{
        public function __construct()
        {
           parent::__construct();
        }
        public function slider($table){
            $sql="SELECT * FROM $table ORDER BY id_slider DESC ";
            return $this->db->select($sql);
        }
        public function sliderbyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }
        public function insertslider($table, $data){
            return $this ->db ->insert($table, $data);
        }
        public function updateslider($table_category_product, $data, $cond){
            return $this ->db ->update($table_category_product, $data, $cond);
        }
        public function deleteslider($table_category_product,$cond){
            return $this->db->delete($table_category_product,$cond);
        }
        // new slider home
        public function newsliderhome($table_slider){
            $sql="SELECT * FROM $table_slider ORDER BY id_slider DESC LIMIT 4";
            return $this ->db ->select($sql);
        }

    }
?>