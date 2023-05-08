

<?php
require_once '../Controllers/DBController.php';

class user{
    private $db;
    private $user_name;
    private $email;
    private $password;
    private $college_id;
    private $role_id;
    private $user_id;

	public function __construct()
    {
        $this->db = new DBController();
    }

	public function login($em, $pw)
    {
        $this->email = $em;
        $this->password = $pw;
        $this->db->startConnection();
        if ($this->userExists()) {
            $qry = "SELECT * FROM user WHERE email='$this->email'";
            $result = $this->db->select($qry);
            if ($result[0]['password'] == $this->password) {
                $this->user_id = $result[0]['user_id'];
                session_start();
                $_SESSION['user_id'] = $this->user_id;
                $this->user_name = $result[0]['user_name'];
                
                $this->db->closeConnection();
                return "Logged in successfully. Redirecting...";
            } else {
                $this->db->closeConnection();
                return "Wrong password. Please try again. Redirecting...";
            }
        } else {
            $this->db->closeConnection();
            return "User not found. Try to register first. Redirecting...";
        }
    }
	private function userExists()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM user WHERE email='$this->email'";
        $result = $this->db->select($qry);
        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    
	public function register($un, $ci, $em, $pw, $ri){
        $this->user_name = $un;
        $this->college_id = $ci;
        $this->password = $pw;
        $this->email = $em;
        $this->role_id = $ri;
        if ($this->db->startConnection()) {
            if ($this->userExists()) {
                return "User already exists. Try again";
            } else {
                $qry = "INSERT INTO user (user_name,email,password,role_id,college_id) VALUES ('$this->user_name','$this->email','$this->password','$this->role_id','$this->college_id')";
                if ($this->db->insert($qry)) {
                    $this->db->closeConnection();
                    return "Registration successful. Redirecting to login";
                } else {
                    $this->db->closeConnection();
                    return "Error";
                }
            }
        }
    }

    public function GetAccounts()
    {
        $this->db->startConnection();
        $qry = "SELECT * FROM `user`";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return ($result);
    
    }
    
    public function GetAccNum()
    {
        $this->db->startConnection();
        $qry = "SELECT `user`.`user_id` FROM `user` WHERE 1;";
        $result = $this->db->select($qry);
        
        $this->db->closeConnection();
        return count($result);        
    }



}





?>