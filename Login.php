<?php
	include("connection.php");
?>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>
<div class="loginbox">
<img src="LoginIconAppl.jpg" class="avatar">
<center>
<h1><center>Login Here</center></h1>
<form method="post" action="">
<p> Username</p>
<input type="text" name="uname" placeholder="Enter Username">
<p>Password</p>
<input type="password" name="pass" placeholder="Enter Password">
<input type="submit" name="login" value="login">
<a href="#">Lost Your Password?</a><br>
<a href="Registration.php">New Registration</a>
</center>
</form>
</div>
</body>
</head>
</html>
<?php
session_start();
	if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$pwd = $_POST['pass'];
		
		$query = "select * from register where username = '$username' && password = '$pwd'";
		
		$data = mysqli_query($conn,$query);
		
		$total = mysqli_num_rows($data);
		//echo $total;
		
		if($total == 1)
		{
			//echo "Login Ok";
			$_SESSION["username"]=$username;
			header('location:index1.php');
		}
		else
		{
			//echo "<font color='red'>Login Failed</font>";
		}
	}
?>