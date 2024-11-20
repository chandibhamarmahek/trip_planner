
<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel Booking</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
		}

		main {
			padding: 20px;
		}

		.booking-form {
			margin-bottom: 20px;
		}

		form {
			display: flex;
			flex-direction: column;
			max-width: 400px;
			margin: 0 auto;
		}

		label {
			margin-bottom: 10px;
		}

		input[type="date"],
		select {
			margin-bottom: 20px;
			padding: 5px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		button[type="submit"],
		button[type="button"] {
			padding: 10px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button[type="submit"]:hover,
		button[type="button"]:hover {
			background-color: #666;
		}

		.room-list {
			display: flex;
			flex-wrap: wrap;
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.room-list li {
			flex: 1 1 300px;
			margin: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			padding: 20px;
			text-align: center;
		}

		.room-list img {
			max-width: 100%;
			height: auto;
			margin-bottom: 10px;
		}

		.room-list h3 {
			margin-bottom: 10px;
			font-size: 20px;
		}

		.room-list p {
			margin-bottom: 10px;
			font-size: 16px;
		}
        body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

main {
	padding: 20px;
}

.booking-form {
	margin-bottom: 20px;
}

form {
	display: flex;
	flex-direction: column;
	max-width: 400px;
	margin: 0 auto;
}

label {
	margin-bottom: 10px;
}

input[type="date"],
select {
	margin-bottom: 20px;
	padding: 5px;
	font-size: 16px;
	border: 1px solid #ccc;
	border-radius: 4px;
}

button[type="submit"],
button[type="button"] {
	padding: 10px;
	background-color: #333;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

button[type="submit"]:hover,
button[type="button"]:hover {
	background-color: #666;
}

.room-list {
	display: flex;
	flex-wrap:
}
	</style>
</head>
<body><?php
 include "connection.php";
?>
	<header>
		<h1>Hotel Booking</h1>
	</header>
	<main>
		<section class="booking-form">
			<h2>Book a Room</h2>
			<form action="rooms.php">
				<label for="checkin-date">Check-In Date:</label>
				<input type="date" id="checkin-date" name="checkin-date" required>
				<label for="checkout-date">Check-Out Date:</label>
				<input type="date" id="checkout-date" name="checkout-date" required>
				<label for="num-guests">Number of Guests:</label>
				<select id="num-guests" name="num-guests">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
				<button type="submit">Search Availability</button>
			</form>
		<!-- </section>
		<section class="room-list">
			<h2>Available Rooms</h2>
			<ul>
				<li>
					<img src="room1.jpg" alt="Room 1">
					<h3>Room 1</h3>
					<p>Price: $100 per night</p>
					<button type="button">Book Now</button>
				</li>
					<li>
					<img src="./room2.jpg" alt="Room 2">
					<h3>Room 2</h3>
					<p>Price: $120 per night</p>
					<button type="button">Book Now</button>
				</li>
					<li>
					<img src="./img/room3.jpg" alt="Room 3">
					<h3>Room 3</h3>
					<p>Price: $150 per night</p>
					<button type="button">Book Now</button>
				</li>
			</ul>
		</section> -->
	</main>
	<footer>
		<p>Hotel Booking &copy; 2023</p>
	</footer>
</body>
</html>  
