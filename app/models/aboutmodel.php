<?php
    class aboutmodel extends DModel{
        public function __construct()
        {
           parent::__construct();
        }
        public function about($table){
            $sql="SELECT * FROM $table ORDER BY id_about DESC ";
            return $this->db->select($sql);
        }
        public function aboutbyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }

        public function insertabout($table, $data){
            return $this ->db ->insert($table, $data);
           
        }
        public function updateabout($table, $data, $cond){
            return $this ->db ->update($table, $data, $cond);
        }
        public function deleteabout($table,$cond){
            return $this->db->delete($table,$cond);
        }
        
        

    }

?>