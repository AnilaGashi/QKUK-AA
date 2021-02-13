<?php

include '../b/header.php'; ?>

<div class="container">
  <div class="link-container">
    <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
	<a  href="#" onclick="changeForm(1)">Register</a>
  </div>
  <form id="mainForm" action="../businessLogic/loginVerify.php" method="post" onsubmit="return validate()">
    <div class="login forms form-style">
      <label for="">Username:</label>
      <input type="text" name='username' class="input" placeholder="username..." />
      <label for="">Password:</label>
      <input type="password" name='password' class="input" placeholder="password..." />
      <input id="submit" type="submit" name='login-btn' class="input submit" value="Login" onclick="validate(0)"/>
    </div>
	 <div class="register forms hide">

	  <label for="">Emri:</label>
        <input type="text" class="input" placeholder="Emri" />
		<label for="">Mbiemri:</label>
        <input type="text" class="input" placeholder="Mbiemri" />
        <label for="">Email:</label>
        <input type="text" class="input" placeholder="username" />
        <label for="">password:</label>
        <input type="password" class="input" placeholder="password" />
        <label for="">Confirm Password:</label>
        <input type="password" class="input" placeholder="password" />
		  
  <div class="divv">
  <label for="male">Male</label><br>
  <input type="radio" id="Male" name="gender" value="male">
  
  
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  

  </div>
        <input id="submit" type="submit" class="input submit" value="Register" onclick="validate(1)" />
	
      </div>

  </form>
</div>
<script>
var num = 7;
function validate(){
 var elementList = document.getElementsByClassName("input-field");
 for(var i = 0; i<elementList.length; i++){
 elementList[i].addEventListener('keyup',function(event){
  [event.target.name]= event.target.value;
  console.log(event.target.value);
 
});
    }
	
	}
	


 function validate(number){
     console.log("hyri ne funksion");
     if(number == 0){
      //Login
	  
      var usernameValue = inputElements[0].value;
      var passwordValue = inputElements[1].value;
      console.log("username "+usernameValue);
      console.log("password "+passwordValue);
      if(usernameValue =="" || passwordValue == "" ){
        alert("Nuk ka te dhena");}
		

	
 else if(!usernameValue.match(/^[a-zA-Z0-9]{3,}$/)){
alert("Email jo valide!");
}


 else if(!passwordValue.match(/^(?=.*[0-9])/)){
alert("Pasword jo valid!");
}

    /* else{
        alert("login success");
      }*/
	  }
	  
else if(number == 1){
       //Register
       var nameValue = inputElements[3].value;
	   var passwordRegValue = inputElements[4].value;
       var lastNameValue = inputElements[5].value;
     
       console.log("name "+nameValue);
       console.log("lastName "+lastNameValue);
       console.log("passwordReg "+passwordRegValue);
       if(nameValue == "" || lastNameValue == "" || passwordRegValue == ""){
        alert("Nuk ka te dhena");
	
       }
	   if(!nameValue.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
alert("Email jo valide!");}

 else if(!passwordRegValue.match(/^(?=.*[0-9])/)){
alert("Pasword jo valid!");
}
	   
	   else{
        alert("Jeni regjistruar me sukses!")
       }
     }
   }

    console.log("jashte funksionit");

    function changeForm(number){
      var format = document.getElementsByClassName('forms');
      if(number == 0){
        format[0].classList.remove("hide");
        format[0].classList.add("form");
        format[1].classList.add("hide");
        format[1].classList.remove("form");
      }else if(number == 1){
        format[1].classList.remove("hide");
        format[1].classList.add("form");
        format[0].classList.add("hide");
        format[0].classList.remove("form");
      }
    }
    
     var inputElements = document.getElementsByClassName("input");
     var usernameValue = inputElements[0].value;
     var passwordValue = inputElements[1].value;
     //console.log("username "+usernameValue);
     //console.log("password "+passwordValue);


</script>



