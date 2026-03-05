<!DOCTYPE html>
<html>
<head>
<title>Google Company</title>

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
flex-direction:column;
justify-content:center;
align-items:center;
background:linear-gradient(120deg,#4285F4,#34A853,#FBBC05,#EA4335);
background-size:300% 300%;
animation:bgmove 8s infinite;
color:white;
text-align:center;
}

@keyframes bgmove{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

h1{
font-size:60px;
margin-bottom:20px;
animation:slide 2s ease;
}

@keyframes slide{
from{
transform:translateY(-100px);
opacity:0;
}
to{
transform:translateY(0);
opacity:1;
}
}

p{
font-size:20px;
margin-bottom:40px;
}

.search-box{
background:white;
padding:10px;
border-radius:30px;
width:400px;
display:flex;
box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

.search-box input{
border:none;
outline:none;
flex:1;
padding:10px;
font-size:16px;
border-radius:30px;
}

button{
padding:10px 20px;
border:none;
border-radius:20px;
background:#4285F4;
color:white;
cursor:pointer;
}

button:hover{
background:#2c6be0;
}

</style>
</head>

<body>

<h1>Google</h1>

<p>Welcome to the Google Company Portal</p>

<div class="search-box">
<input type="text" placeholder="Search Google...">
<button>Search</button>
</div>

</body>
</html>