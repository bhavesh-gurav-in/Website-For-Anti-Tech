<?php
session_start();
error_reporting(0);
//echo "<center>welcome ".$_SESSION["username"];
$user = $_SESSION["username"];
if($user == true)
{
	echo "<center>welcome ".$_SESSION["username"];
}
else
{
	header('location:login.php');
}
?>
<html>
<head>
<title>Drop-Down Menu Design</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="menu-bar">
<ul>
<li class="active"><i class="fa fa-home"></i><a href="#">Home</a></li>
<li><a href="#"><i class="fa fa-user"></i>About Us</a>
  <div class="sub-menu-1">
      <ul>
         <li><a href="mission.php">Mission</a></li>
         <li><a href="team.php">Team</a></li>
   </ul>
</div>
</li>
<li><a href="#"><i class="fa fa-clone"></i>Services</a>
<div class="sub-menu-1">
      <ul>
         <li><a href="webdesign.php">Web Designing</a></li>
         <li class="hover-me"><a href="#">Marketing</a><i class="fa fa-angle-right"></i>
               <div class="sub-menu-2">
                        <ul>
                                  <li><a href="socialmedia.php">SEO</a></li>
                                  <li><a href="socialmedia.php">Social Media</a></li>
                                  <li><a href="emailmarketing.php">Email Marketing</a></li>
                      </ul>
             </div>
     </li>
           <li class="hover-me"><a href="#">Mobile App</a><i class="fa fa-angle-right"></i>
          <div class="sub-menu-2">
                        <ul>
                                  <li><a href="#">Android</a></li>
                                  <li><a href="#">IOS App</a></li>
                                   <li><a href="#">Unity App</a></li>
                      </ul>
             </div>
     </li>
   </ul>
</div>
</li>
<li><a href="clients.php"><i class="fa fa-users"></i>Clients</a></li>
<li><a href="investor.php"><i class="fa fa-angellist"></i>Investors</a></li>
<li><a href="pricing.php"><i class="fa fa-inr"></i>Pricing</a></li>
<li><a href="training.php"><i class="fa fa-edit"></i>Training</a></li>
<li><a href="contact.php"><i class="fa fa-phone"></i>Contact</a></li>
<li class="active"><i class="fa fa-user"></i><a href="login.php">Logout</a>
</li>
</ul>
</div>
</body>
</html>
