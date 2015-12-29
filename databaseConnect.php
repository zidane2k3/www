<?php

session_start();

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
    $DB_con = new PDO($dsn, $user, $pass, $opt);
}
catch(PDOException $e)
{
     die($e->getMessage());
}


include_once 'class.user.php';
$user = new USER($DB_con); 

?>