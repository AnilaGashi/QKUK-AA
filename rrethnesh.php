<!DOCTYPE html>
<html>
<title>Rreth Nesh</title>
<?php
session_start();
?>

<head>
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

#div1{
display:flex;
flex-wrap:wrap;
height:600px;
width:0 auto;
margin-top:60px;
}

#div1 img{
	height:100%;
	width:100%;
	}

.div2{
display:flex;

flex-direction:column;
margin-top:150px;
width:0 auto;
height:800px;



}
.div2 h1{
display:flex;
justify-content:center;
margin-top:70px;
align:center;
color:#C0C0C0;
}



.li1{
margin-top:50px;
display:flex;
justify-content:center;
font-family:Sans-serif;
color:#E8CEBF;

}

.div4{
display:flex;
flex-wrap:wrap;
justify-content:center;

width: 0 auto;
height:700px;
}

@media only screen and (min-width:375px) {
  /* For mobile phones: */
#img1{
width:90px;
height:70px;
margin-left:600px;

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

<div id="div1"><img src="a2.jpg" alt="mega"/></div>
</div>

<div class="div2">
<h1><u>Miresevini ne faqen zyrtare te QKUK per menaxhimin e situates Pandemike!</u></h1>

<h2 style="text-align:center;margin-top:80px;color:white;font-family:Garamond">Ne si Stafi Mjekësor i Qendrës Klinike Universitare te Kosoves jemi ne sherbim 24/7 te pacientëve të infektuar me virusin e quajtur Sars-COV-2.
<br>Me punen tone tani e disa muaj jemi ne frontin e pare ne " luften pandemike", andaj qe menaxhimi i situates te jetë edhe më i lehtë ofrojmë këtë faqe në te cilen munden te kyçën te gjithë qytetarët e Kosovës dhe të marrin shërbime dhe informacione në kohë reale.
</h2>
<h2>
<ul>
<li class="li1">Informacionet më te fundit rreth situatës pandemike.</li>
<li class="li1">Statistikat e përgjithëshme.</li>
<li class="li1">Historiku dhe zhvillimi i Virusit.</li>
<li class="li1">Përhapja e Pandemisë ne vendin tonë dhe botë.</li>
<li class="li1">Përshkrimi i simtomave.</li>
</ul>
</h2>


</div>

<div class="div4">
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="14.jpg" style="width:100%">
</div>

<div class="mySlides fade">
 
  <img src="a7.jpg" style="width:100%">
</div>

<div class="mySlides fade">

  <img src="15.jpg" style="width:100%">
</div>
<div class="mySlides fade">

  <img src="16.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="13.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>



</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</div>

</body>
<html>