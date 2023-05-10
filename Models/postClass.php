<?php

require_once '../Controllers/DBController.php';
    
class Post{
    protected $db;
    public $post_id;
    public $user_id;
    public $text;
    
    
    private $error="";

    public function __construct()
    {
        $this->db = new DBController();
    }

  

    public function createPost($user_id,$data){
        if(!empty($data['post'])){
          
            $this->db->startConnection();

            $txt=$data['post']; 
            $query="INSERT INTO `post`(`user_id`, `text`)VALUES ('$user_id','$txt')";
            
            $this->db->insert($query);
            
            echo "inserted Successfully";
            $this->db->closeConnection();

        }
        else
        {
            $this->error .="Please type something to post!<br>";

        }
        return $this->error;

    }

    public function getPost($id)
    {
        $query="SELECT * FROM `post` WHERE user_id = '$id' ORDER BY id DESC";
        $this->db->startConnection();
        $result=$this->db->select($query);

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }


    }
    public function getPostNum()
    {
        $query="SELECT * FROM `post` ORDER BY user_id DESC";
        $this->db->startConnection();
        $result=$this->db->select($query);

        if($result)
        {
            return count($result);
        }
        else
        {
            return false;
        }


    }
    public function getPosts()
    {
        $query="SELECT * FROM `post` ORDER BY 'user_id' DESC";
        $this->db->startConnection();
        $result=$this->db->select($query);

        if($result)
        {
            $this->db->closeConnection();
            return $result;
        }
        else
        {
            $this->db->closeConnection();
            return false;
        }


    }



 /*private  function create_postid()
    {
    $length= rand(4,19);
    $number="";
    for($i=0;$i<$length;$i++)
    {
        $new_rand=rand(0,9);
        $number=$number.$new_rand;

    }
    return $number;
    }*/

}




/*
 fel profile page


if($_SERVER['REQUEST_METHOD'])=="POST";
{
    $post= new Post();
    $id=$_SESSION['mybook_userid'];
    $result=$post->createPost($id,$_POST);

    if($result == "")
    {
        header("Location: profile.php");
        die;
    }
    else
    {
        echo"<div style='text-align:center;font-size:12px;color:white;background-color:grey";
        echo"<br>The following errors occured:<br><br>";
        echo $result;
        echo"</div";   // dah 3la 4an law msh kateb haga fel textarea myhotsh fel database NULL
    }
}

//Collect posts   fel profile

$post= new Post();
$id=$_SESSION['mybook_userid'];
$posts=$post->getPost($id);



*/









?>