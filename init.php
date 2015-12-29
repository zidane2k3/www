<?php
session_start();
require_once'databaseConnect.php';
require_once'classes/user.php';
$user = new user($DB_con); 
?>