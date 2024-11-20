<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}
    print_r($_POST);
    print_r($_SESSION);
    include "connection.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fdate = $_POST["fdate"];
        $tdate = $_POST["tdate"];
        $email = $_POST["email"];
        $price = $_POST["price"];
        // $phone = $_POST["phone"];
        // $address = $_POST["address"];
        $bi = $_SESSION['bookid'];
      
        $sql = "UPDATE booking SET email ='$email', book_id='$bi' , total_price='$price', from_date='$fdate' , to_date='$tdate' WHERE book_id='$bi'";
        if (mysqli_query($conn, $sql)) {
          header("Location: managebookings.php");
          
        } else {
          echo "Error updating user: " . mysqli_error($conn);
        }
      }
      
?>