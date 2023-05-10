<?php
require_once "../controller/connection.php";
class Authcontroller{
    protected $db;
    // login
    // session_start();
    public function login(User $user){
        $this->db=new Db;
        if($this->db->open()){
            $query="select * from user where password='$user->password' and email='$user->email'";
            $result=$this->db->select($query);
            if($result===false){
                echo "error in query";
                return false;
            }else{
                session_start();
                if(count($result)==0){
                    $_SESSION["error message"]="wrong password or email";
                    return false;
                }else{
                    $x;
                     $_SESSION["uid"]=$result[0]["userID"];
                     $_SESSION["email"]=$result[0]["email"];
                    return $result[0]["accType"];
                } 
            }
        }else{
            echo 'not open';
            $this->db->close();
            return false;
        }
    }
    // register
    public function register(User $user){
        $this->db=new Db;
        if($this->db->open()){
            $roleid=2;
            $query="insert into user values('$user->first_name','$user->last_name','$user->speialist','$user->email','$user->password','$user->phone','$user->image','$user->age','',' $roleid')";
            $result=$this->db->insert($query);
            if($result!=false){
                $_SESSION["speialist"]=$user->speialist;
                $_SESSION["email"]=$user->email;
                $_SESSION["uroleid"]=$user->speialist;
              
                return true;
            }else{
                $_SESSION["errmsg"]="somthing went wrong";
                $this->db->close();
                return false;
            }
        }else{
            echo 'not open';
            $this->db->close();
            return false;
        }
     
    }
    ////////////////////////accept
    public function accept($email,$role){
        $this->db=new Db;
        if($this->db->open()){
            $query="insert into acceptevent values ('$role','$email')";
            $result=$this->db->insert($query);
            if(!$result){
                return true;
            }else{
                $_SESSION["errmsg"]="somthing went wrong";
                $this->db->close();
                return false;
            }
        }else{
            return false;
        }
    }
    ///////logout
    public function logout($email){
        $this->db=new Db;
        if($this->db->open()){
            $qry="delete from user where userID='$email'";
            $this->db->deleteDb($qry);
            return true;
        }else{
            return false;
        }
    }
    //////////////
    public function profile($email){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from user where userID='$email'";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
      ///////////////////
    public function search($id){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from user where firstName='$id'";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }

}
?>