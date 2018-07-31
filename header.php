<?php

    session_start();


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <style>
     a:hover, a:active, a:visited, a:link { color: inherit; 
                text-decoration: none;
            }
    
            .no-border {
             border-radius: 0px;
            border: 0;
            box-shadow: none;
            /* You may want to include this as bootstrap applies these styles too */
            }
  </style>
</head>
<body style="background-color:rgb(195, 219, 213);" >
  <!--img src="logo.png"  width="100%"-->
  <div class="header" style="background-image: url(alumni.jpg) ">
    <span style="text-align: center;">
        <a href="#">
            <br>
             <h1>  <img src="grad_hat.png" style="width:50px;height:50px;"> 
              Alumni Engagement System</h1>
             </a> 
             <br>
    </span>
  </div>
<div>
<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
    
    <div class="navbar-header" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Alumni_ES</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#events">Events </a> </li>
        <li><a href="#">Funds </a> </li>
        <li><a href="#contus">Contact </a></li>
        <li><a href="#abtus">About Us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
      if(isset($_SESSION['u_id'])){
        echo'<li><a href="configuration.php"><span class="glyphicon glyphicon-pencil"></span> Edit</a></li>';
      echo'<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Alumni</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
      }
      else
      {
        echo'<li><a href="register.php"><span class="glyphicon glyphicon-education"></span> Register</a></li>';
        echo'<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
      }
      ?>
      </ul>
    </div>
  </div>
</nav>
</div>
