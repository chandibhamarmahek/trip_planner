
<?php
	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php"); // redirect to the login page
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tourism Website Feedback Form</title>
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

.feedback-section {
	margin: 0 auto;
	max-width: 600px;
}

h2 {
	font-size: 24px;
	margin-bottom: 20px;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	font-size: 18px;
	margin-bottom: 5px;
}

input,
textarea {
	border: 1.5px solid grey;
	border-radius: 4px;
	font-size: 18px;
	margin-bottom: 20px;
	padding: 10px;
}

input[type="submit"] {
	background-color: #4CAF50;
	border: none;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	font-size: 18px;
	padding: 10px;
	width: 150px;
	margin-top: 10px;
}

input[type="submit"]:hover {
	background-color: #000;
}

    </style>
</head>
<body>
	

	<main>
		<section class="feedback-section">
			<h2>Leave Us Your Feedback</h2>
			<form action="feedin.php" method="POST">
				<!-- <label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required> -->

				<label for="feedback">Feedback:</label>
				<textarea id="feedback" name="feedback" required></textarea>

				<input type="submit" value="Submit">
			</form>
		</section>
	</main>
</body>
</html>
