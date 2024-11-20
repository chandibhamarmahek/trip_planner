<?php    session_start(); 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;}  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Prompt</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			color: #444;
			margin-top: 50px;
		}
		.containerss {
			width: 50%;
			margin: auto;
			margin-top: 50px;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			border-radius: 4px;
		}
		button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}
		button:hover {
			background-color: #45a049;
		}
		.no-booking {
			text-align: center;
			margin-top: 20px;
		}
		.no-booking a {
			color: #4CAF50;
		}
	</style>
</head>
<body><?php
include "navbar.php";?>
<?php
	$city_id = ($_POST);
	//print_r($_POST);
	$city_id = $_POST['city_id'];
?>
	<h1>Do You Want to Book a Hotel?</h1>
	<div class="containerss">
		<form method="POST" action="dropdownhotels.php">
			
		<p>Please let us know if you want to book a hotel:</p>
			<button type="submit" name="yes-booking">Yes, I want to book a hotel</button>
			<div class="no-booking">or <a href="index.php#">No, I already have a hotel reservation</a></div>
			<input type="hidden" name="city_id" value="<?php echo $city_id ?>">
		
	</form>
		</div>
	<?php
	
	
	
	// <input type="hidden" city_id>
	?>
</body>
	</html>
	<!-- <a href="index.php#features">Go to Features</a> -->