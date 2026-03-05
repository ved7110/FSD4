<?php
include "db.php";

$message = "";

if(isset($_POST['signin'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

header("Location: google.php");
exit();

}else{
$message = "Invalid Email or Password";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signin</title>

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

.link{
text-align:center;
margin-top:10px;
}

a{
text-decoration:none;
color:#667eea;
}

.message{
text-align:center;
margin-bottom:10px;
color:red;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h2>Sign In</h2>

<?php
if($message!=""){
echo "<div class='message'>$message</div>";
}
?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="signin">Sign In</button>

</form>

<div class="link">
Don't have an account? <a href="signup.php">Sign Up</a>
</div>

</div>

</body>
</html>