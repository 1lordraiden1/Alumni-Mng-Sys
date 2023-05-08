<?php 

require_once'../../Models/user.php';
require_once'../../Controllers/DBController.php';

class AuthController{
    protected $db ;


    public function login(user $user)
    {
        $db = new DBController;
        if ($db->startConnection()){
            $query = "SELECT * FROM users WHERE email='$user->email' and password= '$user->password' ";
            $result = $this->db->select($query);
            if(!$result){
                echo 'erro in mail';
            }
            

        }
        else{
            echo ' error db';
            return false;
        }
        

    }




















}

?>