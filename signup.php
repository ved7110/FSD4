<?php
include "db.php";

if(isset($_POST['signup'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
mysqli_query($conn,$sql);

echo "<script>alert('Signup Successful')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>

<style>

body{
font-family: Arial;
background: linear-gradient(135deg,#667eea,#764ba2);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.container{
background:white;
padding:40px;
border-radius:10px;
width:300px;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

h2{
text-align:center;
margin-bottom:20px;
}

input{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#667eea;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#5a67d8;
}

.error{
color:red;
font-size:14px;
}

</style>

<script>

function validateForm(){

var name=document.forms["signupForm"]["name"].value;
var email=document.forms["signupForm"]["email"].value;
var password=document.forms["signupForm"]["password"].value;

if(name==""){
alert("Name must be filled out");
return false;
}

var emailPattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

if(!email.match(emailPattern)){
alert("Enter a valid email address");
return false;
}

if(password.length<6){
alert("Password must be at least 6 characters");
return false;
}

return true;

}

</script>

</head>

<body>

<div class="container">

<h2>Sign Up</h2>

<form name="signupForm" method="POST" onsubmit="return validateForm()">

<input type="text" name="name" placeholder="Full Name">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Create Password">

<button type="submit" name="signup">Sign Up</button>

</form>

</div>

</body>
</html>