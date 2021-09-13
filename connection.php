<?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="company";
	
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn)
	{
		//echo "Connection Ok";
	}
	else
	{
		echo "Connection failed".mysqli_connect_error();
	}
?>