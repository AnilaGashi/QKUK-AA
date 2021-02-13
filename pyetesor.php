<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Pyetesor</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>

body{
background-image: url("covid3.jpg");
background-repeat: no-repeat;
background-size: cover;

}

#maindiv{
height: 0 auto;
width: 0 auto;

}


.topnav{
display:flex;
flex-wrap:wrap;
flex-direction:row;
float:left;
background-color: #333;
top: 0;
width: 100%; 
position:fixed;

}

.topnav a {
display:flex;

align-items:right;
float: left;
color: #f2f2f2;
text-align: center;
padding: 20px 20px ;
text-decoration:none;
font-size: 20px;
display: inline;
font-family: Cambria, serif;

}
		
.topnav a:hover {
background-color:white;
color: black;

}
   
.topnav a.a {
background-color:#DC143C;
color: white;
}

#img1{
width:90px;
height:70px;
margin-left:500px;

}

.bodydiv{
margin-top: 150px;
display:flex;
justify-content:center;
justify-content:space-evenly;
height:700px;
width:0 auto;
}


.div1{
display:flex;
direction:row;
margin-bottom:30px;

}

.rdiv{

background-color:white;
margin-top:150px;
display:flex;
justify-content:center;
border: 1px solid black;
}

h3{
color:white

}

@media only screen and (min-width:375px) {
  /* For mobile phones: */
  
.div1{
display:flex;
direction:row;
margin-bottom:50px;

}
}
}






</style>
</head>

<body>
<div id="maindiv">

<div class="topnav">

<a class="a" a href="home.php"> Ballina </a>
<a href="rrethnesh.php">Rreth Nesh</a>
<a href="informacion.php">Informacione</a>
<a href="a/index.php">Login</a>

 <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="Pyetesor.php">Pyetësor</a>
      <?php
      }
      ?>
<?php
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
      ?>

        <a href="a/dashboard.php">
          Dashboard
        </a>
      <?php
      }
      ?>


	  
	  <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="businessLogic/logout.php">Logout</a>
      <?php
      }
      ?>
<img id="img1" src="qkuk1.jpg"/>
</div>
</div>

<div class="rdiv">
<h1 id="h1"> Trego Simtomat tuaja. </h1>
</div>
<div class="bodydiv">
<form>
<div class="div1">
<h3 style="color:white">Emri<br>
  <input type="text"  name="Emri" value=""><br></h3>
  <h3 style="color:white">Mbiemri<br>
  <input type="text"  name="" value=""><br></h3>
  </div>
  <h3 style="color:white">Adresa<br>
  <input type="text"  name="" value=""><br></h3>
   <h3 class="h3">Numri Personal<br>
  <input type="text"  name="" value=""><br></h3>
  <h3 class="h3">Numri Kontaktues<br>
<input type="text"  name="" value=""><br> </h3>

<div class="div1">
<h3>  
Femer <input type="radio" name="gjinia" value="femer"> <br>
Mashkull <input type="radio" name="gjinia" value="mashkull"></h3> <br>
 </div>
 
 <textarea rows="10" cols="30"> Pershkruaj Simptomat tuaja</textarea><br>
 <input style="backround-color:red" type="submit" value="Submit">
 
</form>
</div>

</body>
</html>