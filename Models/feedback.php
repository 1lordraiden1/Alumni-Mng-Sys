<?php 

require_once '../Controllers/DBController.php';

class feedback{
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

    public function GetFeeds()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `feedback`";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }

    public function GetFeedInfo($id)
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `feedback` WHERE `feedback_id` = $id";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }

    public function GetFeedNum()
    {
        $this->db->startConnection();
        $qry = "SELECT `feedback`.`feedback_id` FROM `feedback` WHERE 1;";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return count($result);        
    }
    public function isSolved($id)
    {
        $this->db->startConnection();
        $res = "SELECT `feedback`.`isSolved` FROM `feedback` WHERE `feedback_id` = $id;";
        $r=$this->db->select($res);
        if($r==0){
            $r = 1;
        }
        else{
            $r = 0;
        }

            
        $qry = "UPDATE `feedback` SET `isSolved`='$r' WHERE `feedback_id` = $id;";
        $r= $this->db->update($qry);
        
        
        return $r;
       
            
            
            

    }

}



?>