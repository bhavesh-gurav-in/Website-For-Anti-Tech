<?php
	error_reporting(0);
	include("connection.php");
?>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<h1>Registration Form</h1>
<div class="reg">
<form id="reg" method="post" action="Registration.php">
<h2>Register Here</h2>
<label>Serial number :</label><br>
  <input type="text" name="srno" placeholder="Serial Number" id="name" required><br><br>
<label>First Name :</label><br>
  <input type="text" name="fname" placeholder="First Name" id="name" name="fname" required><br><br>
<label>Last Name :</label><br>
   <input type="text" name="lname" placeholder="Last Name" id="name" required><br><br>
<label>Email  :</label><br>
   <input type="email" name="email" placeholder="Enter your email" id="name" required><br><br>
   <label>UserName :</label><br>
   <input type="text" name="uname" placeholder="username" id="name" required><br><br>
<label>Password :</label><br>
    <input type="password" name="password" placeholder="Enter your password" required id="name"><br><br>
<label>Re-Enter Password :</label><br>
    <input type="password" name="conpassword" placeholder="Re-enter password" id="name" required><br><br>
<label>Mobile Number :</label><br>
     <input type="number" name="number" placeholder="Enter Mobile Number" id="name" required><br><br>
<label>Date Of Birth :</label><br>
    <input type="date" name="date" placeholder="Enter Your DOB" id="name" required><br><br>
<label>Gender :</label><br>
<input type="radio" id="ma" name="r1" value="male" required><span id="ma">Male</span><br>
<input type="radio" id="ma" name="r1" value="female"><span id="ma">Female</span><br>
<input type="radio" id="ma" name="r1" value="other"><span id="ma">Others</span><br><br>

<input type="checkbox" id="ch"><span id="ch"> I Agree To All The Terms And Conditions.</span><br><br>
<button type"submit" id="sub" name="submit">Submit</button>
</form>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST["submit"]))
{
	$rn=$_POST['srno'];
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$email=$_POST['email'];
	$un=$_POST['uname'];
	$pwd=$_POST['password'];
	$cpwd=$_POST['conpassword'];
	$no=$_POST['number'];
	$date=$_POST['date'];
	$gender=$_POST['r1'];
	
	$query="insert into register values ('$rn','$fn','$ln','$email','$un','$pwd','$cpwd','$no','$date','$gender')";
	$data=mysqli_query($conn,$query);
	
	if($data)
	{
		//echo "Data Inserted into Database";
		header('location:login.php');
	}
	else
	{
		echo "Data failed to Inserted in database";
	}
}
?>