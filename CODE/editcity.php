<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
	form {
  border: 1px solid #ccc;
  padding: 10px;
  width: 400px;
}

label {
  display: block;
  font-weight: bold;
  margin-top: 10px;
}

input[type=text],
input[type=email],
input[type=password] {
  border: 1px solid #ccc;
  padding: 5px;
  width: 100%;
}
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

.stay-form {
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

input[type="date"],
select,
input[type="number"] {
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
<body>
        
    <?php
     print_r($_GET);?>
     <!DOCTYPE html>
<html>
<head>
<style>
        
    </style>
	<title>Update Record</title>
</head>
<body>
    <?phpinclude"dashboardinc.php";
    // print_r($_POST);
    // print_r($_GET);

    ?>
<h2>Update Record</h2>
<?php
//print_r($_POST);
print_r($_GET);
// $fname = $row['fname'];
// $email = $row['email'];
// $phone = $row['phone'];
// $address = $row['address'];?>

<form action="updatecity.php" method = "post">
	<label for="cityid"> City id:</label>
	<input type="number" name="cityid" >
	<br><br>
    <label for="cname"> City name:</label>
	<input type="text" name="cname" > 
	<br><br>
	<input type="hidden" name="id" >
	<input type="submit" name="update" value="Update">
</form>
<?php
include"connection.php";