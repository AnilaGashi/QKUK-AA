

<!DOCTYPE html>
<html>
<title>Home</title>
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
margin-left:800px;

}

.bodydiv{
display:flex;
justify-content:center;
flex-direction:column;
flew-wrap:wrap;
height:800px;
width:0auto;
border: 1px solid #173F5F;
background-image: url("covid3.jpg");
background-repeat: no-repeat;
background-size: cover;
}

h1{
font-family:Garamond;
color:white;
text-align:center;
}

.bottomdiv{
margin-top:200px;
display:flex;
flex-wrap:wrap;
flex-direction:row; 
width:0 auto;
height:500px;
height:
}

.bottomdiv1{
flew-wrap:wrap;
height:500px;
width:700px;
border: 1px solid #173F5F;
}

.bottomdiv2{
flew-wrap:wrap;
height:300px;
width:700px;
border: 1px solid #173F5F;
}

.img2{
height:500px;
width:0 auto;
}

.link{
text-decoration:none;
border-radius:5pxpx;
 line-height:20px;
font-size:20px; 
background-color:#DC143C; 
padding:20px 5px; 
margin-top:380px;
margin-left:280px;
align:center; 
color:#ffffff;

}

@media only screen and (min-width:375px) {
  /* For mobile phones: */
  
.link{
margin-right:50px;
}
}










</style>
</head>

<body style>
<div id="maindiv">

<div class="topnav">

<a class="a" a href="home.php"> Ballina </a>
<a href="rrethnesh.php">Rreth Nesh</a>
<a href="informacion.php">Informacione</a>
<a href="a/index.php">Login</a>
<img id="img1" src="qkuk1.jpg"/>
</div>
</div>
<div class ="bodydiv">
<h1>Miresevini ne faqen zyrtare te QKUK per menaxhimin e situates Pandemike!<h1>
<h1>Ne jemi me te fuqishem se COVID-19!<h1>
</div>

<div class="bottomdiv">
<div class="bottomdiv1">
<h2 style="text-align:center;margin-top:80px;color:white;font-family:Garamond">Ne si Stafi Mjekësor i Qendrës Klinike Universitare te Kosoves jemi ne sherbim 24/7 te pacientëve të infektuar me virusin e quajtur Sars-COV-2.
<br>Me punen tone tani e disa muaj jemi ne frontin e pare ne " luften pandemike", andaj qe menaxhimi i situates te jetë edhe më i lehtë ofrojmë këtë faqe në te cilen munden te kyçën te gjithë qytetarët e Kosovës dhe të marrin shërbime dhe informacione në kohë reale.
</h2>

<a href="rrethnesh.php" class="link">Më Shumë</a>
	</div>

<div class="bottomdiv2">
<img class="img2" src="v3.jpg"/>
</div>
</div>



</body>
<html>