<?php

class Topic
{

    private $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }
    
    public function getAllTopics()
    {
            
    }
    
    public function getTopicsByID()
    {
        
    }
    
    public function getTopicCount($id)
    {
        $topics = $this->db->prepare("SELECT count(*) FROM topics WHERE sub_categories_id = ".$id); 
        $topics->execute(); 
        $number_of_rows = $topics->fetchColumn();
        
        if($number_of_rows > 0)
        {
            return $number_of_rows;
        }
        else
        {
            return 0;
        }
    }
    
}


?>