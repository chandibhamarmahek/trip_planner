<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php"); 
   exit;}
   print_r($_GET);
   $e = $_GET['email'];
   echo $e;
   include "connection.php";
   $q = "delete from user where email = '$e' ";
  // $q = "delete from city where city_id = '$cid'";
   $res = mysqli_query($conn,$q);
   if($res)
   {
    header ("location: manageusers.php");
   }
   else{
      
      echo "<script>alert('cannot delete parent table constraints');</script>";

   }

?>
