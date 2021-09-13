<?php
session_start();
error_reporting(0);
$user = $_SESSION["username"];
if($user == true)
{

}
else
{
	header('location:login.php');
}
?>
<html>
<head>
<title>Mission Of Company</title>
<link rel="stylesheet" href="style4.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<!--Menu Bar-->
<div class="menu-bar">
<b><h1>Anti-Chatya Software Technology</h1></b>
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
<!--End Menu Bar-->

<!--Top Image-->
<div class="myslides fade">
		<div class="numbertext">
		</div>
		<img src="https://source.unsplash.com/700x400/?coding,web" style="width:100%">
</div>
<!--End Top Image-->

<!--First section of web-->
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Web Development</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Web development refers in general to the tasks associated with developing websites for hosting via intranet or internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://source.unsplash.com/700x400/?coding" alt="content">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Web Development</h2>
          <p class="leading-relaxed text-base">Our Team built coding project for you and provide all reliable solution for your business</p>
        </div>
      </div>
      <div class="xl:w-1/2 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://source.unsplash.com/700x400/?programming" alt="content">
          <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">WordPress Development</h2>
          <p class="leading-relaxed text-base">We provide you best wordpress website in minimum budget.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End First section of web-->

<!--Footer Part for webpage-->
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Anti-Chatya Tech</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2019-22 MCA Student —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@New Start up</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>
</body>
</html>
