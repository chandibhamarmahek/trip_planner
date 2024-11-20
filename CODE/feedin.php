<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}
print_r($_POST);
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
    $review = $_POST['feedback'];
    $email = $_SESSION['email'];
    include "connection.php";
    $query = "INSERT INTO `review` (`email`, `review_id`, `review_date`, `feedback`) VALUES ('$email', NULL, 'time()*60*60', '$review')";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "<script>alert('thank you!');</script>";
        
        header("Location: index.php");
    }
    else{
        echo "<script>alert('Error!');</script>";
    }
     ?>
    
</body>
</html>