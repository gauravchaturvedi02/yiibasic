<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>


<body>
<h3 id="demo"></h3>

<h3 style= " font-family: fantasy; font-size: 30px;">Employee Detail Creation</h3>
  
  <div class="field">
    <label for="name" class ="lname">Employee Name</label>
  
    <input type="text" name="name" id="name">
   </div>

  <div class="field">
    <label for="email" class ="lname">Email</label>
    <input type="email" name="email" id="email">
  </div>

  <div class="field">
    <label for="empid" class ="lname">EmpId</label>
    
    <input type="number" name="empid" id="empid">
  </div>

  <div class="field">
    <input type="button" value="Send Data to Local Storage" id="submit" onclick="submit()">
    <input  style= "float:right;" type="button" value="Find Your Details" id="detail" onclick="detail()">
  </div>
</body>
<script>


var empname = JSON.parse( localStorage.getItem('name')) || [];
var empid = JSON.parse( localStorage.getItem('empid')) || [];
var email = JSON.parse( localStorage.getItem('email')) || [];
var name,employeeid,empemail ;

function submit()
     { 
    //console.log(name.value);
    console.log(empname);
    name = document.getElementById('name').value;
    employeeid = document.getElementById('empid').value;
    empemail = document.getElementById('email').value; 
      empname.push(name);
      empid.push(employeeid);
      email.push(empemail);
      localStorage.setItem('name', JSON.stringify(empname));
      localStorage.setItem('empid',JSON.stringify(empid));
      localStorage.setItem('email',JSON.stringify(email));


    document.getElementById("demo").innerHTML = "Your data has been sent to Local Storage";
    //console.log(name);
    document.getElementById('name').value = '';
    document.getElementById('email').value = ''
    document.getElementById('empid').value = ''
    
      }
      function detail(){
        window.location = "http://localhost/testLocal/web/site/display";
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