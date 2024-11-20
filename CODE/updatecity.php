<?php
session_start();
print_r($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = $_POST["cname"];
    $cid = $_POST["cityid"];
    include "connection.php";
    $sql = "UPDATE city SET  city_name='$cname' , city_id ='$cid' WHERE city_id='$cid'";
    if (mysqli_query($conn, $sql)) {
      header("Location: managecities.php");
      
    } else {
      echo "Error updating user: " . mysqli_error($conn);
    }
  }
  
  
  
  
?>