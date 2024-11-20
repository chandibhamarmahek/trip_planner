<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
include ("connection.php");
//print_r($_POST);
print_r($_GET);?>
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
$_SESSION['bookid']= $_GET['book_id'];

// $fname = $row['fname'];
// $email = $row['email'];
// $phone = $row['phone'];
// $address = $row['address'];?>

<form action="editbookings.php" method = "post">
    <label for="email"> Email:</label>
	<input type="email" name="email" > 
	<br><br>
	<label for="price"> Price:</label>
	<input type="number" name="price" >
	<br><br>
	<label for="fdate"> From date:</label>
	<input type="date" name="fdate" >
    <br><br>
	<label for="tdate"> To date:</label>
	<input type="date" name="tdate" >
    <br><br>
	<input type="hidden" name="id" >
	<input type="submit" name="update" value="Update">
    
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   // echo "hi";
//    echo $_SESSION['email'];
//   $fname = $_POST["fname"];
//   $lname = $_POST["lname"];
//   $email = $_POST["email"];
//   $password = $_POST["password"];
//   $phone = $_POST["phone"];
//   $address = $_POST["address"];

//   $sql = "UPDATE user SET email='$email', password='$password' , contact_no='$phone', fname='$fname' , lname='$lname' , address ='$address' WHERE email='$email'";
//   if (mysqli_query($conn, $sql)) {
//     header("Location: manageusers.php");
    
//   } else {
//     echo "Error updating user: " . mysqli_error($conn);
//   }
 }


?>
</body>
</html>