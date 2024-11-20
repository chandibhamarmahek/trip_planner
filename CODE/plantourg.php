
<?php session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Page with 3 Buttons Example</title>
	<link rel="stylesheet" href="style.css">
    <style>
        body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	/* background-color: #333;
	color: #fff;
	padding: 20px;
	text-align: center;*/
} 

h1 {
	margin: 0;
}

main {
	padding: 200px;
}

.button-section {
	margin: 0 auto;
	max-width: 600px;
	display: flex;
	flex-direction: column;
	align-items: center;
}

h2 {
	font-size: 24px;
	margin-bottom: 20px;
}

button {
	background-color: #333;
	border: none;
	border-radius: 4px;
	color: #000;
	cursor: pointer;
	font-size: 18px;
	padding: 12px;
	width: 200px;
    
	margin-bottom: 20px;
}

.button-primary {
	background-color: #4CAF50;
}

.button-secondary {
	background-color: #4CAF50;
}

.button-tertiary {
	background-color: #4CAF50;
}

    </style>
</head>
<body><?php
   
	include "navbar.php";
    ?>
	
   
	<header>
		<h1></h1>
	</header>

	<main>
		<section class="button-section">
		<form action="selcity.php" method ="post">
                <button class="button-primary" type="Submit">Plan tour</button>
			</form>
			
            <form action="cityhotel.php"><button class="button-secondary">Book hotels</button></form>
			
            <form action="feedbackg.php" method="post">
            <button class="button-tertiary">Provide Feedback</button>
            </form>
			
		</section>
	</main>
	<?php include "footer.php";?>
</body>
</html>
