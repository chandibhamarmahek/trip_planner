<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel Selection</title>
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

.hotel-select {
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

select {
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
		<h1>Hotel Selection</h1>
	</header>
	<main>
		<section class="hotel-list">
			<h2>Select a Hotel</h2>
			<form>
				<label for="hotels"></label>
				<select id="hotels" name="hotels">
					<option value="">Select a hotel</option>
					<option value="hotel1">Hotel 1</option>
					<option value="hotel2">Hotel 2</option>
					<option value="hotel3">Hotel 3</option>
					<option value="hotel4">Hotel 4</option>
				</select>
				<button type="submit">Submit</button>
			</form>
		</section>
	</main>
</body>
</html>
