<?php    session_start(); 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}  ?>
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
		.containerss {
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
		.hello {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
			background-color:#4CAF50
		}
		.hello :hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<?php include "navbar.php";?>
	<div class="containerss">   
      
     <?php
	 
	  //include "navbar.php";
	 // print_r($_POST);
	 
      include("connection.php");
	  
	  $c=$_POST['city'];
	  $query = "select city_name from city where city_id = '$c' ";
	  $r = mysqli_query($conn,$query);
	   while ($row = mysqli_fetch_array($r)){
		  $cn = $row['city_name']; 
	   }
	  ?>
	  <h1>Select places in <?php echo $cn;?> </h1>
	  <br><br><?php
    $query="select * from place where city_id =".$_POST['city'];
    //echo $query;
    $result = mysqli_query($conn,$query);
    
    //exit;
    ?>
    <form action="bookgp.php" method="post">
    <label for="place"></label>
    <select name="place" id="place">
    <?php
       while ($row = mysqli_fetch_array($result)){
        $city_id = $row['city_id'];
       ?>
     <option value="<?php echo $row['place_name'];?>"><?php echo $row['place_name'];?></option>
     <?php }?>
      <!-- <option value="sabarmati ashram">Sabarmati ashram</option>
      <option value="rani ki vav">Rani ki vav</option>
      <option value="sun temple modhera">Sun temple modhera</option>
      <option value="dholavira">Dholavira</option> -->
    </select><form action="bookgp.php" method="post">
	<input type="hidden" name="city_id" value="<?php echo $city_id ?>">
    <input type="hidden" name="city_id" value="<?php echo $city_id ?>"> <br>
    <input class="hello" type="submit"> 
    <!-- <button type = "submit">Submit</button> -->
    </form></div>
	<?php  include "footer.php";?>
    
    
</body>
</html>