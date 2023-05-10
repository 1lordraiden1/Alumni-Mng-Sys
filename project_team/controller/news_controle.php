<?php
    require_once "../controller/connection.php";
    require_once "../controller/authcontrole.php";
    require_once "../controller/news_controle.php";
    // session_start();
class News  extends Authcontroller {
    public function add_news($email ,$news,$img,$uid){
        $this->db=new Db;
      
        if($this->db->open()){
             $qry="insert into news values('$email','$news','$img','','$uid')";
             return  $this->db->insert($qry);
          
        }else{
            echo 'not open';
            return false;
        }
      }
    public function add_feedback($email ,$feedback){
        $this->db=new Db;
        if($this->db->open()){
             $qry="insert into feedback values('$email','$feedback')";
             return  $this->db->insert($qry);
          
        }else{
            echo 'not open';
            return false;
        }
      }
      public function delete_news($id){
        $this->db=new Db;
        if($this->db->open()){
             $qry="delete from news where id='$id'";
             return $this->db->deleteDb($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
    public function add_news_alumni($email ,$news,$img){
        $this->db=new Db;
        if($this->db->open()){
             $qry="insert into post_alumni values('$news','$img','$email','')";
             return  $this->db->insert($qry);
          
        }else{
            echo 'not open';
            return false;
        }
      }
    public function select_news($id){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from news where id='$id'";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
    public function update_news($con,$img,$id){
        $this->db=new Db;
        if($this->db->open()){
             $qry="update news set content='$con',img='$img' where id='$id'";
             return true;
        }else{
            echo 'not open';
            return false;
        }
      }
    public function allnews(){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from news ";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
    public function allnews_alumni(){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from post_alumni ";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
      public function accept_event($event ,$email){
        $this->db=new Db;
        //   ++$x;
        if($this->db->open()){
             $qry="insert into acceptevent values('$event','$email')";
            return  $this->db->insert($qry);
            //  return $x;
        }else{
            echo 'not open';
            return false;
        }
      }
    public function number($event){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from acceptevent where event='$event'";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
    public function member($event,$name){
        $this->db=new Db;
        if($this->db->open()){
             $qry="select * from acceptevent where event='$event' and name='$name'";
             return $this->db->select($qry);
        }else{
            echo 'not open';
            return false;
        }
      }
}

?>