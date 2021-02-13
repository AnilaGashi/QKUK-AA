<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Informacione</title>

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>

body{
background-color:#173F5F;

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
.rdiv{
background-color:white;
margin-top:200px;
display:flex;
justify-content:center;
border: 1px solid black;
}

.rdiv1{
background-color:white;
margin-top:300px;
display:flex;
justify-content:center;
border: 1px solid black;


}





.bodydiv{
display:flex;
justify-content:center;
flex-wrap:wrap;
flex-direction:row;
height:500px;
width:0 auto;
margin-top:150px;
justify-content:space-evenly;

}

.div1{

width: 400px;
height:250px;


}

img{
position:cover;
 max-width: 100%;
        max-height: 100%;
		
@media only screen and (min-width:375px) {
  /* For mobile phones: */
  
.rdiv{
background-color:white;
margin-top:200px;
display:flex;
justify-content:center;
border: 1px solid black;
}

.rdiv1{
background-color:white;
margin-top:400px;
display:flex;
justify-content:center;
border: 1px solid red;


}

#img1{
width:90px;
height:70px;

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

</div>
<div class="rdiv">
<h1 id="h1"> Si te mbrohemi nga infektimi me virusin Covid-19? </h1>
</div>
<div class="bodydiv">

<div class="div1"><img src="4.jpg"/> </div>
<div class="div1"><img src="2.jpg"/> </div>
<div class="div1"><img src="5.jpg"/> </div>
<div class="div1"><img src="3.jpg"/> </div>
<div class="div1"><img src="7.jpg"/> </div>
<div class="div1"><img src="1.jpg"/> </div>
</div>

<div class="rdiv1">
<h1 id="h1"> Cilat janë simtomat e Virusit Covid-19? </h1>
</div>

<div class="bodydiv">
<img src="8.jpg"/>
</div>

</body>
<html>