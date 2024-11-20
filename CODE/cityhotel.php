<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php"); // redirect to the login page
	exit;}?>

<!DOCTYPE html>
<html>
<head>
	<title>Select City in Gujarat</title>
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
		.containers {
			width: 50%;
			margin: auto;
			margin-top: 50px;
		}
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			background-color: #fff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}
		.ho {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}
		.ho:hover {
			background-color: #45a049;
		}
        header {
	background-color: #1abc9c;
	color: #fff;
	padding: 10px;
        }
header h1 {
	margin: 0;
	font-size: 24px;
        }
	</style>
</head>
<body>
   <?php
	include "navbar.php";
   ?>
	<!-- <header>
        Book hotels in:
    </header> -->
	<div class="containers">
        <form action ="bookinghotels.php"  method = "post">
    <label for="city">Select City:</label>
    <select name="city" id="city">
        <?php
        include("connection.php");
         $query="select city_id,city_name from city";
        $result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)){
        ?>
      <option value="<?php echo $row['city_id'];?>"><?php echo $row['city_name'];?></option>
      <?php }?>
      
    </select>
    <br><br>
   
      <input type="submit" class = "ho" name = "submit" value="Submit">
    </form>
	</div>
    <?php
    if (isset($_POST['submit']) ) 
    {
   
       header("location: selplace.php");
    }
    include "footer.php";?>
</body>
</html>