<?php
    class Database extends PDO{

        public function __construct($connect, $user, $pass){
            parent:: __construct($connect, $user, $pass);
        }
        public function select($sql , $data=array(), $fetchStyle= PDO::FETCH_ASSOC){
            $statement =$this -> prepare($sql);

            foreach($data as $key => $value){
                $statement-> bindParam($key, $value);
            }

            $statement ->execute();
            return $statement ->fetchAll($fetchStyle);
        }
        public function insert($table, $data){
            $keys = implode(",",array_keys($data)); //implode ham them ky tu
            $values = ":".implode(", :",array_keys($data)); //implode ham them ky tu  
            $sql="INSERT INTO $table($keys) VALUES($values)";

            $statement = $this -> prepare($sql);
            foreach($data as $key => $value){
                $statement-> bindValue(":$key", $value);
            }
            return $statement->execute();
        }
        public function update($table, $data, $cond){
            $updateKeys=NULL;
            foreach($data as $key => $value){
                $updateKeys .="$key =:$key,";
            }
            $updateKeys= rtrim($updateKeys, ",");
            $sql ="UPDATE $table SET $updateKeys WHERE $cond";
            $statement=$this->prepare($sql);
            $statement->bindValue(":$key", $value);

            foreach($data as $key => $value){
                $statement-> bindValue(":$key", $value);
            }
            return $statement->execute();
        }
        public function delete($table,$cond, $limit=1){
            $sql="DELETE FROM $table WHERE $cond LIMIT $limit ";
		    return $this->exec($sql);
        }
        public function affectedRows($sql,$username,$password){
            $statement = $this-> prepare($sql); 
            $statement->execute(array($username,$password));
            return $statement->rowCount(); // dem xem dung tra ve gtri
        }
        
        public function selectUser($sql,$username,$password){
            $statement = $this-> prepare($sql); 
            $statement->execute(array($username,$password));
            return $statement ->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?> 