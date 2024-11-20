<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php"); // redirect to the login page
  exit;}
  include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
		.hl {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}
		.hl:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<h1> Select hotel for booking</h1>
<?php
//echo $_SESSION['city'];
 // print_r($_POST);
 //print_r($_POST);
 //exit;
 
  //SESSION_start();
  //SESSION_start();
    //echo $_SESSION['city'];
    //exit;
     //$SESSION['city'];
      //echo $city;
    //exit;
    //echo $city;
 
  //$city = $_SESSION[ $city];
  //$_SESSION_start();
  //var_dump($_SESSION[$city]);
  //echo $cityid;
?>
<!-- <select name="hotels" id="hotels"> -->
<?php  include"connection.php";
   //echo $_POST;
    //$cityid = $_POST[city_id];
    
    //echo $city;
    //$query = "select hotel_name from hotel where city_id ="
      $q= "select hotel_name from hotel";
    // $query = "select hotel_name from hotel where city_id =". $_POST['city'];
      
     //echo $_POST;
     //exit;
    // $result = mysqli_query($conn,$query);
?>
     
<!-- <form action="bookingrooms.php" method="post">
     <select name="hotel" id="hotel"> -->
   <!-- <?php
       // while ( $row = mysqli_fetch_array($result)){
        // $city_id = $row['hotel_id'];
   ?> -->
         <!-- <option value="<?php 
        //  echo $row['hotel_name'];?>">
        <?php //echo $row['hotel_name'];?></option>
        //  <?php //}?>
         <form action="bookingrooms.php"></form>
      
        </br></br>
        <button type = "submit">Submit</button>
        </form> -->
       <!-- <input type="submit" value="Submit"> -->
      
</form> 
<form action="catnmem.php">
	<div class="containers">
        <form action ="selplace.php"  method = "post">
    <label for="city"></label>
    <select name="city" id="city">
        <?php
        include("connection.php");
        // $query = "select hotel_name from hotel where city_id =". $_POST['cityid'];
		$query = "select hotel_name from hotel where city_id =". $_POST['city'];
    echo $query;
        $result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)){
			$city_id = $row['city'];
	   ?>
     
	  <option value="<?php echo $row['hotel_name'];?>"><?php echo $row['hotel_name'];?></option>
      <?php }
	  //echo $_POST['$cityid'];
	  ?>
      
    </select>

    <input class = "hl" type="submit" value="submit">
	</form>
    
</body>
</html>