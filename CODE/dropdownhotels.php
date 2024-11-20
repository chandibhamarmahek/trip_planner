<?php    session_start(); 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php"); // redirect to the login page
	exit; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
		.htn{
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}
		.htn:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<?php
include "navbar.php";

?>
<h1>Select hotels</h1>
<?php
		//print_r($_POST);
		
		
?>
<?php
//print_r($_POST);
$city_id = $_POST['city_id'];

		
?>
<form action="catnmem.php">
	<div class="containers">
        <form action ="selplace.php"  method = "post">
    <label for="city"></label>
    <select name="city" id="city">
        <?php
        include("connection.php");
        // $query = "select hotel_name from hotel where city_id =". $_POST['cityid'];
		$query = "select hotel_name from hotel where city_id =". $_POST['city_id'];
        $result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)){
			$city_id = $row['city_id'];
	   ?>
     
	  <option value="<?php echo $row['hotel_name'];?>"><?php echo $row['hotel_name'];?></option>
      <?php }
	  //echo $_POST['$cityid'];
	  ?>
      
    </select>

    <input class = "htn"type="submit" value="submit">
	</form>
</body>
</html>