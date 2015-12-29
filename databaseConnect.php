<?php

session_start();

try
{
    $host = 'localhost';
    $db = 'eximia';
    $user = 'root';
    $pass = '';
    
    
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
    $opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // other options 
    );
    $DB_con = new PDO($dsn, $user, $pass, $opt);
    $statement = $DB_con->query("SELECT * FROM users");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo htmlentities($row['first_name']);
}
catch(PDOException $e)
{
     die($e->getMessage());
}


include_once 'class.user.php';
$user = new USER($DB_con); 

?>