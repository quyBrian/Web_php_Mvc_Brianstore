<?php
    class customermodel extends DModel{
        public function __construct(){
           parent::__construct();
        }
        public function insertcustumer($table, $data){
            return $this ->db ->insert($table, $data);
        }
        public function login($table_customer,$username,$password){
             $sql="SELECT * FROM $table_customer WHERE email_customer=? AND password_customer=? ";
            return $this->db->affectedRows($sql,$username,$password);
        }
        public function getLogin($table_admin,$username,$password){
            $sql="SELECT * FROM $table_admin WHERE email_customer=? AND password_customer=? ";
            return $this->db->selectUser($sql,$username,$password);
        }
        // customer detail
        public function detailcustomer($table_customer, $cond){
            $sql="SELECT * FROM $table_customer WHERE $cond";
            return $this ->db ->select($sql);
        }
        //
        public function updatecustomer($table, $data, $cond){
            return $this ->db ->update($table, $data, $cond);
        }
        public function customerbyid($table, $cond){
            $sql="SELECT * FROM $table WHERE $cond";
            return $this ->db ->select($sql);
        }
        //
        public function insertcomment($table, $data){
            return $this ->db ->insert($table, $data);
        }
    }

?>