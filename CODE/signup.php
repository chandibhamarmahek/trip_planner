
<?php include("connection.php");?>
<!DOCTYPE.HTML> 
<html>
<head>
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
		}
		form {
			width: 50%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"], input[type="email"],input[type="textfield"], input[type="number"],input[type="password"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
			font-size: 16px;
			color: #333;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
<title>signup Page</title> <link rel="stylesheet" href="style.css">

</head> 
<body> 
  <!-- <form method="post" action ="insert.php">
<div class="container"><br><br>
 <h1><font size = 25 color = "black"><b>WELCOME!</b></font></h1><br>
<font>
<label>First Name:</label>
<input type = "text" name = "fname" require pattern="[A-Za-z]" ></input><br><br>
<label>Last Name:</label>
<input type = "text" name = "lname" require></input><br><br>
<label>Set a Password:</label>
<input type ="password" name = "p1" require></input><br><br>
<label>Email:</label>
<input type = "email" name = "email" required></input><br><br>
<label>Mobile number:</label>
<input type = "number" name = "mobnum"  require></input><br><br>
<label>Address:</label>
<input type = "textfield" name = "addr" required></input><br><br>
<br><br><br><a href="insert.php"><div class="signupbtn"><input type ="submit" size="2000"box-sizing: "200"; name = "Button" value="Submit"></input><br></div></a>


</div></form> -->

<form action="insert.php" method="post">
		<label for="fname">First Name</label>
		<input type="text" id="name" name="fname" required>

    <label for="lname">Last Name</label>
		<input type="text" id="name" name="lname" required>

    <label for="password">Password</label>
		<input type="password" id="password" name="p1" required>

		<label for="email">Email</label>
		<input type="email" id="email" name="email" required>

		<label for="number" name="mobnum" required >Contact</label>
		<input type="number" id="pw" name="mobnum" required>

    <label for="password">Address:</label>
		<input type="textfield" id="addr" name="addr" required>
<br>
		<input type ="submit" value="Signup">
	</form>

</body></html>

<?php 
//  echo $_SERVER['PHP_SELF'];
// //echo $_SERVER['PHP_SELF'];
// include "connection.php";
// if(isset($_POST['submit']))
// {
// $fname=$_POST['fname'];
// $email=$_POST['email'];
// $mobnum=$_POST['mobnum'];
// $lname=$_POST['lname'];
// $p1=$_POST['p1'];
// $addr=$_POST['addr'];

//  //$query= "insert into 'user' ('email', `password`, `fname`, `lname`, `contact_no`, `addr`)  VALUES ()";
//  $query = "INSERT INTO `user` (`email`, `password`, `fname`, `lname`, `contact_no`, `address`) VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr')";
 
//  echo $query;
//  exit;
//  $result = mysqli_query($conn,$query);
  
//   if($result)
//  {
//  echo "<script>alert('Data inserted successfully');</script>";
//  session_start();
//  $_SESSION['email'] == $email;
//  $_SESSION['fname'] == $fname;
//  $_SESSION['lname'] == $lname;
//  $_SESSION['number'] == $mobnum;
//  header(" location:login.php");

//  }
//  else
//  {
//   echo "<script>alert('Data not inserted');</script>";
// }
// }
  ?>
<?php
// if(isset($_POST['submit']))
// {

// }
// if(isset($_POST['submit']))
// {
// $fname=$_POST['fname'];
// $email=$_POST['email'];
// $mobnum=$_POST['mobnum'];
// $lname=$_POST['lname'];
// $p1=$_POST['p1'];
// $addr=$_POST['addr'];

//  $query="insert into 'user' ('email', `password`, `fname`, `lname`, `contact_no`, `addr`)  VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr')";
// echo "$query";
//   exit;

//  if (mysqli_query($conn, $query)) {
//    echo "New record created successfully";
//    header("location: ./index.php");
//  } else 
//  {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    echo "Account already exists!";
//    header("location:login.php");
//  }
 
// }
include "footer.php";
//  // header("location:../insert.php");
//  @$fname = $_POST['fname'];
//  @$lname = $_POST['lname'];
// @ $p1 = $_POST['p1'];
//  @$email = $_POST['email'];
//  @$mobnum = $_POST['mobnum'];
//  @$addr = $_POST['addr'];
 //$sqlquery = "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) 
// VALUES ('$email', '$pass', '', '$fn', '$ln', '$ph', '$addr');"
  // $sqlquery =  "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) 
  // VALUES ('$email', '$p1', 'good', '$fname', '$lname', '$mobnum', '$addr')";
  //  $result = mysqli_query($conn, $sqlquery);
  //  if($result){echo "data inserted...";}
  //{echo "success";}
 //if($sql)
 


// $sqlquery = "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) 
  //VALUES ('mahekthakkar55@gmail.com', 'hellow', 'hm', 'mili', 'thakkar', '7898973', 'nalNCDl.kvbnmvbnm');" -->



