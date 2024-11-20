<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php"); // redirect to the login page
   exit;}
   print_r($_GET);
   print_r($_POST);
   include "connection.php";
   
$cid = $_GET['city_id'];
echo $cid;
$q = "delete from city where city_id = '$cid'";
  $res = mysqli_query($conn,$q);
   if($res)
   {
    header ("location: managecities.php");
   }
   else{
    echo " " . mysqli_error($conn);
   }

?>