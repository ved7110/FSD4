<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(-45deg,#667eea,#764ba2,#6dd5ed,#2193b0);
background-size:400% 400%;
animation:gradientBG 10s ease infinite;
}

@keyframes gradientBG{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.container{
background:rgba(255,255,255,0.15);
padding:50px;
border-radius:15px;
backdrop-filter:blur(10px);
text-align:center;
color:white;
box-shadow:0 10px 30px rgba(0,0,0,0.3);
animation:float 3s ease-in-out infinite;
}

@keyframes float{
0%{transform:translateY(0px);}
50%{transform:translateY(-10px);}
100%{transform:translateY(0px);}
}

h1{
font-size:40px;
margin-bottom:15px;
}

p{
margin-bottom:30px;
font-size:18px;
}

button{
padding:12px 25px;
margin:10px;
border:none;
border-radius:25px;
font-size:16px;
cursor:pointer;
transition:0.3s;
}

.signup{
background:#00c9a7;
color:white;
}

.signin{
background:#ff6b6b;
color:white;
}

button:hover{
transform:scale(1.1);
box-shadow:0 5px 15px rgba(0,0,0,0.3);
}

</style>

</head>

<body>

<div class="container">

<h1>Welcome</h1>

<p>Welcome to Full Stack Development Project</p>

<a href="signup.php">
<button class="signup">Sign Up</button>
</a>

<a href="signin.php">
<button class="signin">Sign In</button>
</a>

</div>

</body>
</html>