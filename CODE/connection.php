<?php 
    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
    $database = "mydb"; 
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 
          try {
            $conn = mysqli_connect($servername,$username,$password,$database) ;
        } catch (Throwable $th) {
           die("Connection error : ".mysqli_connect_error());
         }
         
    // if($conn) { 
    //     echo "success"; 
    // } 
    // else { 
    //     die("Error". mysql_connect_error());  
    //}  
?>