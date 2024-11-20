<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .plantour{
            
        }
        .plantourbody{
            padding: 0px;
        }
    </style>
</head>
<body class ="plantourbody">
<div class="background">
        </div>
    
    <nav class="navbar">
        <ul class="navlist">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#services">Services</a></li>
        </ul>
        <div class="rightnav">
            <input type="text" name ="search" id = "search">
            <button class="btnsearch">Search</button>    
        </div>
    </nav>
     <?php
   // print_r($_POST);
    ?> 
    <!-- <div class="plantourbtn">
        <div class="plantourbtn1"><button type="submit"  >Plan tour</button></div>
         <div class="plantourbtn2"><button type="submit">Book hotels</button></div>
         <div class="plantourbtn3">  <button type="submit" >Provide feedback</button></div>
       
    </div>  -->
    <div class ="plantour">
    <form action="selectcity.php" method ="post">
   <div class="plantourr">
    <button type = "submit" name ="plntour">Plan tour</button> </br> </form>
    <form action="bookingrooms.php" method ="post">
   <div class="plantour">
    <button type = "submit" name ="bookingrooms">Book hotels</button> </br> </form>
    <form action="feedback.php" method ="post">
   <div class="plantour">
    <button type = "submit" name ="providefeedback">Provide feedback </button> </br> </form>
    </div>
   
   
    </div>
   </form>
</body>
</html>
<?php

?>