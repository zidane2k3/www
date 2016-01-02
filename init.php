<?php
session_start();
require_once'databaseConnect.php';
require_once'classes/user.php'; 
require_once'classes/Bootstrap.php';
$user = new user($db); 

?>