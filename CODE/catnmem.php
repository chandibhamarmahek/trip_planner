
<?php    session_start(); 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php"); // redirect to the login page
	exit; 
	echo $_SESSION['price'];
	} ?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Two Dropdowns Example</title>
	<link rel="stylesheet" href="style.css">
    <style>
        section {
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

.dropdowns {
	margin: 0 auto;
	max-width: 600px;
}

.hel{
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

.sbmt{
	background-color: #4CAF50;
	border: none;
	border-radius: 4px;
	color: #333;
	cursor: pointer;
	font-size: 18px;
	padding: 10px;
}

.sbmt:hover {
	background-color: #666;
}

    </style>
</head>
<body><?php
include "navbar.php";
$_SESSION['price'] = false;
include "connection.php"?>
	
	<main>
		<section class="dropdowns">
			<h1>Select Options</h1>
			</br></br></br>
				<label for="location">Select room category:</label>
				<!-- <select id="location" name="location" require>
					<option value="" selected>--Select--</option>
					<option value="ac">AC</option>
					<option value="nac">NON-AC</option>
					 
				</select> -->
				<form class = "hel" action = "rooms.php" method ="post">
				<select name="room" id="room" required>
					
        <?php
         $query="SELECT * FROM `room_category`";
        $result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)){
        ?>
      <option value="<?php echo $row['room_cat_id'];?>"><?php echo $row['room_cat_name'];?></option>
      <?php }?>
      
    </select>
</br></br></br></br>
				<label for="num_members">Number of members:</label>
				<select id="num_member" name="num_member" required>
					<option value="" selected></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
				</select>
                       <br>
							<input type="hidden">
                           <button class = "sbmt" type="submit">Search</button>
                        </form>
				
			
		</section>
	</main>
</body>
</html>
