<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php"); // redirect to the login page
   exit;}
   print_r($_GET);
   print_r($_POST);
   $bi = $_GET['book_id'];

print_r($_GET);
//$e = $_GET['email'];
//echo $e;
include "connection.php";
$q = "delete from booking where book_id = '$bi'";
$res = mysqli_query($conn,$q);
if($res)
{
 header ("location: managebookings.php");
}


   ?>