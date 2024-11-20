<?php session_start();?>
<?php
include("connection.php");
$query=mysqli_query($conn,"select * from user");
 //mysqli_query($conn, $query);
 include "navbar.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .containers {
	max-width: 600px;
	margin: 0 auto;
	padding: 20px;
}

.profile {
	background-color: #fff;
	border-radius: 5px;
	padding: 20px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
	text-align: center;
}

.profile h1 {
	font-size: 36px;
	margin-bottom: 10px;
}

.profile img {
	border-radius: 50%;
	width: 200px;
	height: 200px;
	object-fit: cover;
	margin-bottom: 20px;
}

.profile h2 {
	font-size: 24px;
	margin-bottom: 10px;
}

.profile p {
	font-size: 18px;
	margin-bottom: 10px;
}
    </style>
</head>
<body class = "containerss">
<?php
    //  $sql = "SELECT * FROM user WHERE email = $_SESSION[email]";
    //  $result = mysqli_query($conn, $sql);
 
    //  if ($result > 0)
    //  {
    //      $row = mysqli_fetch_assoc($result);
    //      $name = $row["name"];
    //      $email = $row["email"];
    //      $phone = $row["phone"];
    //  }
    ?>
<!-- <div class="container">
		<div class="profile">
			<h1>User Profile</h1>
			 <img src="./img/avatar.jpg" alt="Avatar"> -->
			<h2><?php //echo" $email";?></h2>
			<!-- <p>Email: <?php.// echo $email; ?></p> -->
			<!-- <p>Phone: <?php// print $phone;?></p> -->
		</div>
	</div>
  
	<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class= "profile">
		<h1>Your Profile</h1>
		<?php
		// start the session and connect to the database

		

		// check if the user is logged in
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		    header("location: login.php"); // redirect to the login page
		    exit;
		}

		// get the user's ID from the session
		$email = $_SESSION["email"];

		// select the user's information from the database
		$sql = "SELECT * FROM user WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);

		// check if the query was successful
		if(mysqli_num_rows($result) == 1) {
		    // fetch the user's information from the result set
		    $row = mysqli_fetch_assoc($result);
		    ?><p class = "profile"><strong><?php
			echo "hello"." ".$row["fname"]."!"?></strong></p>
			<p class = "profile"><strong>Email:</strong> <?php echo $row["email"]; ?></p>
		    <p class = "profile"><strong>Phone number:</strong> <?php echo $row["contact_no"]; ?></p>
		    <p class = "profile"><strong>First Name:</strong> <?php echo $row["fname"]; ?></p>
		    <p class = "profile"><strong>Last Name:</strong> <?php echo $row["fname"]; ?></p>
		    <p class = "profile"><strong>Address:</strong> <?php echo $row["address"]; ?></p>
		    <?php
		} else {
		    echo "Error: User not found";
		}

		// close the database connection
		mysqli_close($conn);
		?>
	</div>
</body>
</html>

</body>
</html>