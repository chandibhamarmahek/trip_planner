<?php
 session_start();
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}
//  print_r($_SESSION);
// print_r($_GET);
// print_r($_POST);
$cat_id=$_POST['room'];

if($_POST['room'] = "AC")
{
	$_SESSION['catac'] = "AC";
	// print_r($_SESSION);
	$status = 1;
	//echo $status;
	//header("location:ac.php");
}
else if($_POST['room'] = "NON-AC")
{
	$_SESSION['catac'] = "NON_AC";
	//print_r($_SESSION);
	$status = 2;
	//echo $status;
	//header ("location: dashboard.php");
}
else{

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

		.hmm {
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

		.buttonn {
			padding: 10px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.buttonn:hover,
		.buttonn:hover {
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

 .hmm {
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

.buttonn {
	padding: 10px;
	background-color: #333;
	color: #fff;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.buttonn:hover,
.buttonn:hover {
	background-color: #666;
}

.room-list {
	display: flex;
	flex-wrap:
}
	</style>
</head>
<body>
<?php include "navbar.php";
if($status = 1){
	//header("location:ac.php");
}
						// print_r($_GET);
						// print_r($_REQUEST);
						// print_r($_POST);
					?>
<section class="room-list">
			<h2>Available Rooms</h2>
			<br><br><br><br>
			<ul type = "hidden">
			<?php 
				include("connection.php");
				$query="select price from rooms where room_cat_id =".$cat_id;
				//echo $query;
				
				$result = mysqli_query($conn,$query);	
				while ($row = mysqli_fetch_array($result) ){
					static $no=1;
					?>
						<li> <form class = "hmm" action="bookhotelsgpt.php" method="post">
						<img src="./img/room<?php echo $no;?>.png" alt="Room" . $no>
						<h3>Room <?php echo $no;?></h3>
						<?php
					
						echo "Price: Rs." . $row['price']." "."per night" ;?>
						<br><?php
						$_SESSION['price'] = $row['price'];
					?>
					 <input type="hidden" name ="<?php $row['price'].$no; ?>" value="<?php $row['price'].$no; ?>"> <?php
					 echo "<input type='hidden' name='id' value='$no'>";
					?>
					 <br>
						
					 <button class = "buttonn" name="btn".$no type="submit">Book Now</button>
						
                    </form>
					</li>
					<?php
					$no++;
					}

			?>
			
			</ul>
			    
		</section>
</body>
</html>