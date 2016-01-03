<?php

class Post
{

    private $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }
    
    public function getAllPosts()
    {
            
    }
    
    public function getPostByID()
    {
        
    }
    
    public function getPostCount($id)
    {
        $posts = $this->db->prepare("SELECT count(*) FROM posts WHERE topics_id = ".$id); 
        $posts->execute(); 
        $number_of_rows = $posts->fetchColumn();
        
        if($number_of_rows > 0)
        {
            return $number_of_rows;
        }
        else
        {
            return 0;
        }
    }
    
    public function getLastPost($id)
    {
        $getPosts = $this->db->prepare("SELECT * FROM posts where topics_id =".$id." ORDER BY id DESC LIMIT 1");
        $getPosts->execute();
        $lastPost = $getPosts->fetch();
        return $lastPost;
    }
    
}


?>