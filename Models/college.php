<?php 
require_once '../Controllers/DBController.php';
class college{
    protected $db;
    private $college_id;
    private $college_name;
    private $college_location;


    public function __construct()
    {
        $this->db = new DBController();
    }

    public function GetColleges()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `college`";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }
    public function GetCollegeInfo($id)
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `college` WHERE `college_id` = $id";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }
    
}


?>