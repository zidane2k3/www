<?php
session_start();
require_once'databaseConnect.php';
require_once'classes/user.php'; 
$user = new user($db); 
require_once'classes/Bootstrap.php';
require_once'classes/Category.php';
$category = new Category($db);
require_once'classes/SubCategory.php';
$sub_Category = new SubCategory($db);
require_once'classes/Topic.php';
$topics = new Topic($db);
require_once'classes/Post.php';
$posts = new Post($db);

?>