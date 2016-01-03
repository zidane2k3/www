<?php

class Category
{
    private $db;
 
    public function __construct($db)
    {
      $this->db = $db;
    }
    
    public function getByID()
    {
        
    }
    
    public function getAll()
    {
        $getCategories = $this->db->prepare("SELECT * FROM categories")   ;
        $getCategories->execute();
        $categories = $getCategories->fetchAll();
        return $categories;
    }
    
    public function create()
    {
        
    }
    
}

?>