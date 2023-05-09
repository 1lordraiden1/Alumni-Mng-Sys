<?php 

require_once '../Controllers/DBController.php';

class event{
    protected $db;
    private $event_id;
    private $event_name;
    private $place;
    private $Day;
    private $date;

    public function __construct()
    {
        $this->db = new DBController();
    }

    public function GetEvents()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `event`";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }

    public function GetEventInfo($id)
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `college` WHERE `college_id` = $id";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }

    public function GetEveNum()
    {
        $this->db->startConnection();
        $qry = "SELECT `event`.`event_id` FROM `event` WHERE 1;";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return count($result);        
    }
    public function accept_event($event ,$email){
    
        //   ++$x;
        if($this->db->startConnection()){
             $qry="insert into acceptevent values('$event','$email')";
             $this->db->closeConnection();
            return  $this->db->insert($qry);

            //  return $x;
        }else{
            echo 'not open';
            $this->db->closeConnection();
            return false;
        }
    }
    public function number($event){
        
        if($this->db->startConnection()){
             $qry="select * from acceptevent where event='$event'";
             $this->db->closeConnection();
             return $this->db->select($qry);
        }else{
            echo 'not open';
            $this->db->closeConnection();
            return false;
        }
      }
    public function member($event,$name){
        
        if( $this->db->startConnection()){
             $qry="select * from acceptevent where event='$event' and name='$name'";
             $this->db->closeConnection();
             return $this->db->select($qry);
        }else{
            echo 'not open';
            $this->db->closeConnection();
            return false;
        }
      }
    
}


?>