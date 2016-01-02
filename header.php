<?php 
require_once 'init.php'; 
$css = rand();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eximia</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css?=<?=$css?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Eximia</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
            <li class="active"><a href="/forum.php">Forum</a></li>
            <li><a href="officer.php">Officer Application</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name="txt_uname">
            </div>
            <div class="form-group" method="post">
              <input type="password" placeholder="Password" class="form-control" name="txt_password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
				</div><!--/.navbar-collapse -->
      </div>
    </nav>