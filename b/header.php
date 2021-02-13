<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/css1.css" />
  <style>
  body{
	  background-image: url("../12.jpg");
  }
  
  #img1{
width:90px;
height:70px;
margin-left:600px;

}
  </style>
</head>

<body style=background-img:"..12.jpg">

<div class="topnav">

<a class="a" a href="../home.php"> Ballina </a>
<a href="../rrethnesh.php">Rreth Nesh</a>
<a href="../informacion.php">Informacione</a>


 <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="../Pyetesor.php">Pyetësor</a>
      <?php
      }
      ?>
<?php
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
      ?>

        <a href="../a/dashboard.php">
          Dashboard
        </a>
      <?php
      }
      ?>
<a href="index.php">Login</a>


	  
	  <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="../businessLogic/logout.php">Logout</a>
      <?php
      }
      ?>
<img id="img1" src="../qkuk1.jpg"/>
</div>
  <div class="header">
  
  
   
  </div>