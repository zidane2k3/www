<?php

class SubCategory
{
    private $db;
 
    public function __construct($db)
    {
      $this->db = $db;
    }
    
    public function getByParentID($id)
    {
        $getSubCategories = $this->db->prepare("SELECT * FROM sub_categories WHERE categories_id = ".$id);
        $getSubCategories->execute();
        $subCategories = $getSubCategories->fetchAll();
        return $subCategories;
    }
    
    public function getAll()
    {
        $getSubCategories = $this->db->prepare("SELECT * FROM sub_categories")   ;
        $getSubCategories->execute();
        $subCategories = $getSubCategories->fetchAll();
        return $categories;
    }
    
    public function create()
    {
        
    }
    
}

?>