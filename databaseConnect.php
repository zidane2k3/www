<?php

try
{
    $host = 'eximia.co.uk';
    $db = 'christi1_eximia';
    $user = 'christi1_eximia';
    $pass = 'Sogekishu91';
    
    
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
    $opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // other options 
    );
    $db = new PDO($dsn, $user, $pass, $opt);
}
catch(PDOException $e)
{
     die($e->getMessage());
}

?>