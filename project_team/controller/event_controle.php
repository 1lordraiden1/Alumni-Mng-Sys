<?php
    require_once "../controller/connection.php";
class Event{
//    public static $x=0;
    public function allevent(){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from events ";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
      public function accept_event($event ,$email){
        $this->db=new Db;
        //   ++$x;
        if($this->db->open()){
             $qry="insert into acceptevent values('$event','$email')";
            return  $this->db->insert($qry);
            //  return $x;
        }else{
            echo 'not open';
            return false;
        }
      }
        public function number($event){
            $this->db=new Db;
            if($this->db->open()){
                $qry="select * from acceptevent where event='$event'";
                return $this->db->select($qry);
            }else{
                echo 'not open';
                return false;
            }
        }
        public function member($event,$name){
            $this->db=new Db;
            if($this->db->open()){
                $qry="select * from acceptevent where event='$event' and name='$name'";
                return $this->db->select($qry);
            }else{
                echo 'not open';
                return false;
            }
        }
}

?>