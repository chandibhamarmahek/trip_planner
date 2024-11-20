<?php
session_start();
$_SESSION['HI'] = 'HELLO';
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php"); // redirect to the home page
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
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
		}
		form {
			width: 50%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"], input[type="password"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
			font-size: 16px;
			color: #333;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body><br><br><br><br><br>
<!-- <form action="" method="post">
		<label for="email">Email</label>
		<input type="text" id="email" name="email" required>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" required>

		<input type="submit" value="Login">
	</form> -->
<?php

print_r($_POST);
include("connection.php");
 
 if(isset($_POST['login']))
 {
    $email = $_POST['email'];
    $password=$_POST['password'];

$q="select * from user where email='$email' and password='$password'";

print $q;
//echo mysqli_result();

$rs=mysqli_query($conn,$q);
$row=mysqli_fetch_array($rs);
 $_SESSION['email'] = $email;
 print_r($_SESSION['email']);


// while($row = mysqli_fetch_array($rs))
// {
// $id = $row['email'];
// $name = $row['password'];
// }
 if (!$row)
 {
	
   echo "<script>alert('$message');</script>";
   // Function call
   ("your credentials are incorrect");
   
	header("location:login.php");

 }
   else
   { $_SESSION['ulogin'] = "yes"; 
	$_SESSION["loggedin"] = true;
   header("location:index.php");
    }
   if($email == "admin@gmail.com" && $password == "apple")
   {	 $_SESSION["loggedin"] = true;
	header("location:dashboard.php");
   }
 }

?>

</body>
</html>