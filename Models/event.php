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
}


?>