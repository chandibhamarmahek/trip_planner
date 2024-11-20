<?php 

session_start(); // start the session

// check if the user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}

// // display the protected content
// echo "Welcome, " . $_SESSION['email'] . "!";

if($_SESSION['ulogin'] = "yes")
{
 
include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tourism</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .heading{
        color:white;
    }
</style>
 <body class ="back">
  
    <?php
   // include "navbar.php";
    ?>
    
     <section class="background fsection">
        <div class="boxmain">
            <div class="fhalf">
                <p class= "textb"><h1 class="heading">A Destination For The New Millennium</h1></font>
                 </p>
                <p class="texts">Welcome to the paradize.. </p>
                <div class="button"> 
                    <form action="plantourg.php" method=post>

                    <button  type="submit" class="btnindex">Let's Get Started</button>
                    </form>
                 
                </div>
            </div>
            <div class="shalf">
                
            </div>
            
        </div>
    </section> 
    <?php
    }
    else{
        header('location: login.php');
    }
    include "footer.php";

    ?>
</body>
</html>
