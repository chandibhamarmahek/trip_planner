<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotel Stay Form Example</title>
	<link rel="stylesheet" href="style.css">
    <style>
        body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #333;
	color: #fff;
	padding: 20px;
	text-align: center;
}

h1 {
	margin: 0;
}

main {
	padding: 20px;
}

.stay-form {
	margin: 0 auto;
	max-width: 600px;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	font-size: 18px;
	margin-bottom: 10px;
}

input[type="date"],
select,
input[type="number"] {
	font-size: 16px;
	padding: 8px;
	border-radius: 4px;
	border: 1px solid #ccc;
	margin-bottom: 20px;
}

button[type="submit"] {
	background-color: #4CAF50;
	border: none;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	font-size: 18px;
	padding: 10px;
}

button[type="submit"]:hover {
	background-color: #666;
}

    </style>
</head>
<body>
	<header>
		<h1>Book your stay..</h1>
	</header>

	<main>
		<section class="stay-form">
			<h2>Enter Your Stay Details</h2>
			<form>
				<label for="checkin-date">Check-in Date:</label>
				<input type="date" id="checkin-date" name="checkin-date" required>

				<label for="checkout-date">Check-out Date:</label>
				<input type="date" id="checkout-date" name="checkout-date" required>

				<!-- <label for="room-type">Room Type:</label>
				<select id="room-type" name="room-type">
					<option value="" selected>Select room type</option>
					<option value="single">Single</option>
					<option value="double">Double</option>
					<option value="twin">Twin</option>
					<option value="suite">Suite</option>
				</select> -->

				<label for="num-guests">Number of Guests:</label>
				<input type="number" id="num-guests" name="num-guests" min="1" max="6" required>

				<button type="submit">Book Now</button>
			</form>
		</section>
	</main>
</body>
</html>
