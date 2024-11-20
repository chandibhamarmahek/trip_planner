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
print_r($_POST);
//print_r($_GET);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  $sql = "UPDATE user SET email='$email', password='$password' , contact_no='$phone', fname='$fname' , lname='$lname' , address ='$address' WHERE email='$email'";
  if (mysqli_query($conn, $sql)) {
    header("Location: manageusers.php");
    
  } else {
    echo "Error updating user: " . mysqli_error($conn);
  }
}






// if (isset($_POST['Edit'])) {
//     $fname = $_POST['fname'];
//     $email = $_POST['email'];
//     $id = $_POST['id'];
//     $phone = $_POST['phone'];
//     $password = $_POST['password'];
//     $address = $_POST['address'];

//     $sql = "UPDATE user SET fname='$fname',lname='$lname', phone='$phone', address='$address',password='$password' WHERE email= $_SESSION['email'] ";
//     print $sql;
//     $result = mysqli_query($conn, $sql);

//     if ($result) {
//         header("Location: manageusers.php");
//         exit();
//     } else {
//         echo "Error updating record: " . mysqli_error($conn);
//     }
//}

// if (isset($_POST['id']))
//  {
//     $id = $_POST['id'];

//     // Select the record from the table
//     $sql = "SELECT * FROM user WHERE id=$id";
//     $result = mysqli_query($conn, $sql);
//     while ($row = mysqli_fetch_array($result)){
        
//     if ($row = mysqli_fetch_array($result)) {
//         $row = mysqli_fetch_assoc($result);
//         $name = $row['name'];
//         $email = $row['email'];
//         $phone = $row['phone'];
//         $address = $row['address'];
//     } else {
//         echo "Record not found";
//         exit();
//     }
//}}


?>


</body>
</html>