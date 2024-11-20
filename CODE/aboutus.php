<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <style>
	 body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }
    
    p {
      color: #666;
      line-height: 1.6;
      margin-bottom: 10px;
    }
    
    .containers {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
	font-size: 14px;
}

header {
	background-color: #333;
	color: #fff;
	padding: 10px;
}


main {
	padding: 20px;
}

.about-us {
	background-color: #f9f9f9;
	padding: 20px;
}

.about-us h1 {
	margin-top: 0;
}

.containers {
	max-width: 1200px;
	margin: 0 auto;
}

footer {
	background-color: #333;
	color: #fff;
	padding: 10px;
	margin-top: 50px;
}

footer p {
	margin: 0;
	text-align: center;
}

footer a {
	color: #fff;
	text-decoration: none;
}

footer a:hover {
	text-decoration: underline;
}   
      

.about-us h2 {
	margin-top: 30px;
}

.about-us ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.about-us ul li {
	margin-top: 10px;
}

</style>
	<title>About Us</title>
	
</head>
<body>
	<?php include "navbar.php";?>
	<?php //include('header.php'); ?>

	<main>
		<section class="about-us"> 
			
				<h2>About Us</h2>
				<p>Have a question or need help planning your trip? Contact us today and we'll be happy to help.</p> 
				<ul>
					<li>Email: info@tourismwebsite.com</li>
					<li>Phone: 555-555-5555</li>
					<li>Address: 123 Main St, Anytown USA</li>
				</ul>
			</div>
		</section>
	</main>
	   <?php
	   include "footer.php";
	  ?>
	

	