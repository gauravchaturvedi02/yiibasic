<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<body>
<h3 style= " font-family: fantasy; font-size: 30px;">Forgot ur EmployeeID , Dont worry tell me your email Id:</h3>
  <div  class ="field">
    <label for="email" class ="lname">Employee email</label>
    <input type="email" name="email" id="email">
    <div class ="field">
  	<button onclick ="display();">Get your Details</button>
</div>
  </div>
  <div id ="box" style="width: 87%;height:50%;padding: 90px;display:inline-block;align-content: space-evenly;background-color:rgb(199, 160, 206);margin:30px;display:none;">
 <p id ="welcomeMessage" style=" font-family: fantasy;  font-size: 20px;"></p>
 <p id ="empid_display" style=" font-family: fantasy;  font-size: 20px;"></p>
 <p id ="email_display" style=" font-family: fantasy;  font-size: 20px;"></p>
</div>
</body>

<script type="text/javascript">


 function display(){
 document.getElementById('box').style.display="block";

 var emailcheck =document.getElementById('email').value;
 //console.log(typeof (emailcheck));
 var email=(JSON.parse(localStorage.getItem('email')));
 var len = email.length;
 console.log(email.length);
 //console.log(typeof(email[0]));
 for(var i=0; i < len ; i++){

 	    var ename =JSON.parse(localStorage.getItem('name'))[i];
        var empid =JSON.parse(localStorage.getItem('empid'))[i];
        var email =JSON.parse(localStorage.getItem('email'))[i];

 	if (emailcheck==email){

 		
 		document.getElementById('welcomeMessage').innerHTML ="Hello "+ename+"!!";
        document.getElementById('empid_display').innerHTML ="Your Employee Id is: "+empid+"!!";
        document.getElementById('email_display').innerHTML ="Your Email is: "+email+"!!"

 	}
}
}




</script>
<style type="text/css">
     .field{
     width:70%;
     padding :20px;
     height:70%;;
    }
    .lname{
      padding:5px;
      margin:10px;
      width:40%;
          font-family: fantasy;
    font-size: 30px;
  }
  body {
  
  background-image: url("bg.jpg");
background-color: #cccccc;
background-size: cover;
}

  </style>