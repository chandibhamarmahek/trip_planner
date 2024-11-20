<?php
 session_start();
 
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
        exit;}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connection.php";
    // print_r($_POST);
    // print_r($_GET);
    // print_r($_SESSION);    
    $e = $_SESSION['email'];
    // echo $e;
    // echo $_SESSION['rid'];
    $p= $_SESSION['price'];
    $ci =  $_POST["checkin"];
    $co = $_POST["checkout"];?>
    <br><br><?php
    $q="SELECT room_id FROM `rooms` WHERE room_cat_id = 1 and price = $_SESSION[price]";
    
    $result = mysqli_query($conn,$q);
    while ($row = mysqli_fetch_array($result)){
    ?><?php
    // echo $row['room_id'];
    $r =  $row['room_id'];?>
  <?php //echo $row['city_name'];?>
  <?php }
  
  // echo $r;
  // echo $ci;
  // echo $co;
  // echo $e;
  // echo $p;
  
  
  // $query= "INSERT INTO `booking` (`email`, `book_id`, `room_id`, `total_price`, `from_date`, `to_date`) VALUES ($e, NULL, $r, $p, $ci, $co);";
  $query= "INSERT INTO `booking` (`email`, `book_id`, `room_id`, `total_price`, `from_date`, `to_date`) VALUES ('$e', NULL, '$r', '$p', '$ci', '$co');";
  $result = mysqli_query($conn,$query);
  if($result)
  {
   
   echo "<script>alert('Booked successfully');</script>";
  }
  else{
  // echo "<script>alert('Data not inserted');</script>";
    echo mysqli_error($conn);
}
 
  
  
  
  
  
  
  ?>
    
</body>
</html>