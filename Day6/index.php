<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    .container {
    background-color: skyblue;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    button{
        background:transparent;
		outline: none;
		border:2px solid black;
		font-weight: bold;
		cursor:pointer;	
        height: 40px;
        width: 120px;
        margin: 10px;
        border-radius: 10px;
    }
    h1{
    	color: blue;
    	font-family: 'Flamenco', cursive;
    }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Student<br>Login and Result Storage System</h1>
    <div class="container">
    <a href="login.php"><button>LOGIN</button></a>
    <a href="register.php"><button>REGISTER</button></a>
    <a href="adminlogin.php"><button>ADMIN LOGIN</button></a>
    </div>
</body>
</html>