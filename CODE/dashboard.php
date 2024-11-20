<?php
	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php"); // redirect to the login page
		exit;}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		/* Global styles */
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 1.5;
	color: #333;
	background-color: #f0f0f0;
}

.wrapper {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

/* Header styles */
header {
	background-color: #1abc9c;
	color: #fff;
	padding: 10px;
}

header h1 {
	margin: 0;
	font-size: 24px;
}

/* Navigation styles */
nav {
	background-color: #333;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav ul li {
	display: inline-block;
}

.align{
	align: center;
}

nav ul li a {
	display: block;
	padding: 10px;
	color: #fff;
	text-decoration: none;
}

nav ul li a:hover {
	background-color: #555;
}

/* Main content styles */
main {
	background-color: #fff;
	padding: 20px;
	margin-top: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

	</style>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><?php
	include "connection.php";
	include "dashboardinc.php";
?>
	<div class="wrapper">
		<header>
			<h1>Admin panel</h1>
		</header>
		<!-- <nav>
			<ul>
				<li><a href="dashboard.php#">Dashboard</a></li>
				<li><a href="manageusers.php#">Manage users</a></li>
				<li><a href="managebookings.php#">Manage bookings</a></li>
				<li><a href="managecities.php#">Manage cities</a></li>
			</ul>
		</nav> -->
		<div class = "align">
		<section class="widgets">
	<div class="widget">
		<h2> Users</h2>
		<?php
			$qUsers= "select * from user";
			$rsUsers = mysqli_query($conn,$qUsers);
			$totalUsers = mysqli_num_rows($rsUsers);
			echo $totalUsers;
		?>
	</div>
	<div class="widget">
		<h2>Cities</h2>
		<?php
			$qcities= "select * from city";
			$cities= mysqli_query($conn,$qcities);
			$totalcities = mysqli_num_rows($cities);
			echo $totalcities;
		?>
	</div>
	<div class="widget">
		<h2>Bookings</h2>
		<?php
			$qb= "select * from booking";
			$b= mysqli_query($conn,$qb);
			$totalcities = mysqli_num_rows($b);
			echo $totalcities;
		?>
	</div>
	<div class="widget">
		<h2>Hotels</h2>
		<?php
			$qcities= "select * from hotel";
			$cities= mysqli_query($conn,$qcities);
			$totalcities = mysqli_num_rows($cities);
			echo $totalcities;
		?>
	</div>
		
		</div>
	
	<?php
	include "footer.php";
	
	?>
</section>
</body>
</html>

