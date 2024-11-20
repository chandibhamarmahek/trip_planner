<?php    session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php"); // redirect to the login page
    exit;}
// print_r($_POST );
// print_r($_SESSION);
// print_r($_GET);
  include "navbar.php";
 
// print_r($_SESSION['price']); 
// print_r($_SESSION);  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Booking Form</title>
    <style>
      /* form {
        width: 500px;
        margin: 0 auto;
      }*/
      label, input {
        /* display: block; */
    
        margin-bottom: 10px;
      }
      label {
        font-weight: bold;
      }
      input[type="submit"] {
        margin-top: 10px;
      } 
      * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.containerss {
  width: 50%;
  margin: 0 auto;
}

.hee {
  background-color: #f2f2f2;
  padding: 20px;
}

h1 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 30px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 10px;
}

.col-25 {
  width: 25%;
  padding: 10px;
}

.col-75 {
  width: 75%;
  padding: 10px;
}

input[type="text"], input[type="email"], input[type="tel"], input[type="date"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

.butn{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}
.butn {
	background-color: #4CAF50;
	border: none;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	font-size: 18px;
	padding: 10px;
}

.butn :hover {
	background-color: #666;
}

/* .submitbutton:hover {
  background-color: #45a049;
} */

    </style>
  </head>
  <body>
 
    <div class="containerss">
      <h1>Book Your Stay</h1>
      <form  class = "hee" method="post" action="booking.php">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required>
        </div>
        <!-- <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>
        </div> -->
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="checkin">Check-in Date</label>
          <input type="date" id="checkin" name="checkin" required>
        </div>
        <div class="form-group">
          <label for="checkout">Check-out Date</label>
          <input type="date" id="checkout" name="checkout" required>
        </div>
        <br><br><br>
        <div class="form-group">
          <input class = "butn" type="submit" class = "submitbutton"  value="Book Now">
        </div>
      </form>
    </div>
  <?php
     include "connection.php";
     $e= $_SESSION['email'];
    //  echo $_SESSION['price'];
    //  echo $_POST["checkin"];
    //  echo $_POST["checkout"];
     $q="SELECT room_id FROM `rooms` WHERE room_cat_id = 1 and price = $_SESSION[price]";
    
        $result = mysqli_query($conn,$q);
        while ($row = mysqli_fetch_array($result)){
        ?><?php
        $rid= $row['room_id'];?>
      <?php //echo $row['city_name'];?>
      <?php }?><form action="booking.php"><input type="hidden" name = "rid" value = " <?php $row['room_id'];?>"></form>
      <input type="hidden" name = "rid" value = "<?php $rid;?>"><?php
      $_SESSION['rid'] = $rid;
      // $rid = $row['room_id'];
      
      //   $query= "INSERT INTO `booking` (`email`, `book_id`, `room_id`, `total_price`, `from_date`, `to_date`) VALUES ($e, NULL, $rid, $_SESSION['price'], $_POST['checkin'] , $_POST["checkout"])";
      //  $result = mysqli_query($conn,$query);
      //  if($result)
      //  {
        
      //   echo "<script>alert('Booked successfully');</script>";
      //  }
      //  else{
      //   echo "<script>alert('Data not inserted');</script>";
      //  }
      
      
      ?>
          

    <!-- <form method="post" action="book.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="checkin">Check-in:</label>
      <input type="date" id="checkin" name="checkin" required>

      <label for="checkout">Check-out:</label>
      <input type="date" id="checkout" name="checkout" required>

      <input type="submit" value="Book Now">
    </form> -->
    <?php
    
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //   $name = $_POST['name'];
    //   $email = $_POST['email'];
    //   $phone = $_POST['phone'];
    //   $checkin = $_POST['checkin'];
    //   $checkout = $_POST['checkout'];
    
    //   // Save the booking information to a database or send an email to the hotel
    //   // with the booking details.
    
    //   // Redirect the user to a confirmation page.
    //   header('Location: confirmation.php');
    //   exit;
    // }
    ?>
    
  </body>
</html>
