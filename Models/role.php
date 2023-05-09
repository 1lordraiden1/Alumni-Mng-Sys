<?php 
require_once '../Controllers/DBController.php';


class role{

    protected $db;
    private $role_id;
    private $role_name;

    public function __construct()
    {
        $this->db = new DBController();
    }
    public function GetRoles()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `role`";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }
    public function GetRoleInfo($id)
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `role` WHERE `role_id` = $id";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return $result;        
    }


}
?>