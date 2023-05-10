<?php
class Db{
   private $host="localhost";
   private $username="root";
   private  $password="";
   private   $nameDb="AluMona";
   private   $connection;
//    open db
    public function open(){
       $this->connection=new mysqli($this->host,$this->username,$this->password,$this->nameDb);
       if($this->connection->connect_error){
         echo 'error in open db '.$this->connection->connect_error;
         return false;
       }else{
         return true;
       }
    }
// close db
    public function close(){
        if($this->connection){
            $this->connection->close();
            return true;
        }
    }
//  insert insert db
    public function insert($qry){
         $result=$this->connection->query($qry);
         if(!$result){
            return false;
         }else{ 
            return $this->connection->insert_id;
         }
    }
//  select from db
    public function select($qry){
         $result=$this->connection->query($qry);
         if(!$result){
            echo 'error in run';
            return false;
         }else{ 
            return $result->fetch_all(MYSQLI_ASSOC);
         }
    
    }
    // 
    public function deleteDb($qry){
        $result=$this->connection->query($qry);
        if(!$result){
           echo 'error in run';
           return false;
        }else{ 
           return $result;
        }
   
   }

}
?>