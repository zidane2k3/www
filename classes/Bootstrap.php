<?php

class Bootstrap
{
    
    public function __construct()
    {
        //Nothing to construct;
    }
    
    public static function newForm($action, $name)
    {
        return '<form action="'.$action.'" method="post" name="'.$name.'">';    
    }
    
    public static function endForm()
    {
        
    }
}



?>