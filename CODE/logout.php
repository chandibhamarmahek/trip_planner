<?php

//  session_start();
//  session_unset();
//  session_destroy();
// header ('location: login.php');
// header('Location: login.php');
// if(!isset($_SESSION['email'])) {
//     include_once("login.php");
//     exit;
//  }
// exit;

session_start(); // start the session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to the login page
header("location: login.php");
exit;
?>
