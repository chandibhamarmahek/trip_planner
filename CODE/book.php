<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Do you want to book hotels nearby? </h1>
    <form action="bookinghotels.php" method="post" require>
        <input type="radio" name="n">Yes </input>
        <input type="radio" name="n">No</input>
    </form></br>
    <?php 
    print_r($_POST);
        $city = $_POST['city_id'];
    //echo $city;
    ?>
   <form action="bookinghotels.php" method="post">
    <input type="hidden" name="cityid" value= "<?php echo $_POST['city_id']?>">
    <input type="hidden" name="cityid" value= "<?php echo $_POST['city_id']?>">
    <input type="submit" value="Ok">
   </form>
    <form action="bookinghotels.php" method="post" >
        
        
    </form>
    <?php
    
        session_start();
        $_SESSION['city'] = $_POST['city_id'];
    ?>
         <?php include("connection.php");
         
            
            echo $city;
           // $_SESSION_start();
         $_SESSION['city'] = $city;
        // $query = "select place_name from place where city_name = $_POST['city'] ";
        // $result = mysqli_query($conn,$query);
        
        // while ($row = mysqli_fetch_array($result))
        if (isset($_POST['Yes']) ) 
        {

             header("location: bookinghotels.php");
        }
        if(isset($_POST['No'])){
            header("location: index.php");
        }
        ?>
        
</body>
</html>