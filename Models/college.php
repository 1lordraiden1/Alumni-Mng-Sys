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
    public function DelCollege($id)
    {
        $this->db->startConnection();
        $qry = "DELETE FROM college WHERE college_id='$id'";
        $res=$this->db->select($qry);
        
        $this->db->closeConnection();
        return $res;
          
    }

    private function collegeExists()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM college WHERE `college_id`='$this->college_id'";
        $result = $this->db->select($qry);
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function AddCollege($cn, $cl){
       
        $this->college_name = $cn;
        $this->college_location = $cl;
        if ($this->db->startConnection()) {
            if ($this->collegeExists()) {
                return "College already exists. Try again";
            } else {
                $qry = "INSERT INTO `user`(`college_name`, `college_location`) VALUES ('$this->college_name','$this->college_location')";
                if ($this->db->insert($qry)) {
                    $this->db->closeConnection();
                    return "Added successfully. Redirecting to Colleges";
                } else {
                    $this->db->closeConnection();
                    return "Error";
                }
            }
        }
    }
    
}


?>