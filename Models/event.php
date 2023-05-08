<?php 

require_once '../Controllers/DBController.php';

class event{
    protected $db;
    private $eventID;
    private $subject;
    private $Day;
    private $date;

    public function __construct()
    {
        $this->db = new DBController();
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