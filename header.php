<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
  
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  
</head>
<body>
  
  <div class="topbar">
    <div class="fill">
      <div class="container">
        <a class="brand" href="#">OpenReader</a>
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        
        <p class="pull-right">
          <?php
            if(isset($authUrl)) {
              print "<a class='login' href='$authUrl'>Connect Me!</a>";
            } else {
              echo '<a rel='me' href='$url'>$name</a>';
             print "<a class='logout' href='?logout'>Logout</a>";
            }
          ?>
        </p>

      </div>
    </div>
  </div>

  <div class="container">