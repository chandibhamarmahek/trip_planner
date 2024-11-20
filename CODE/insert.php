<?php 
 session_start();
   include "connection.php";
   print_r($_POST);




if(true)
{
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $mobnum=$_POST['mobnum'];
  $lname=$_POST['lname'];
  $p1=$_POST['p1'];
  $addr=$_POST['addr'];
  echo $fname;
  echo $lname;
  echo $email;
  echo $mobnum;
  echo $p1;
  echo $addr;

  
   $query= "insert into user (email, password, fname, lname, contact_no, address)  VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr');";
   echo $query;
   $result = mysqli_query($conn,$query);
   if($result){
    header("location:login.php");
   }
   else {
    echo "try again ".mysqli_error($conn);
   }
  }
  
  //  if(isset($_POST['submit']))
  
  //  if (mysqli_query($conn, $query)) {
  //   // echo "New record created successfully";
  //    header("location: ./index.php");
  //  } else 
  //  {
  //    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  //    echo "Account already exists!";
  //    header("location:login.php");
  //  }}



// include "footer.php";
// include "connection.php";
// if(isset($_POST['submit']))
// {
// $fname= $_POST['fname'];
// $email=$_POST['email'];
// $mobnum=$_POST['mobnum'];
// $lname=$_POST['lname'];
// $p1=$_POST['p1'];
// $addr=$_POST['addr'];

 //$query= "insert into 'user' ('email', `password`, `fname`, `lname`, `contact_no`, `addr`)  VALUES ()";
 //$query = "INSERT INTO `user` (`email`, `password`, `fname`, `lname`, `contact_no`, `address`) VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr');";
//  $query = "INSERT INTO `user` (`email`, `password`, `fname`, `lname`, `contact_no`, `address`) VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr')";
// $query = "INSERT INTO `user` (`email`, `password`, `fname`, `lname`, `contact_no`, `address`) VALUES ($email, $p1, $fname, $lname, $mobnum, $addr)";
 
//  echo $query;

//  $result = mysqli_query($conn,$query);
  
//   if($result)
//  {echo "<script>alert('Data inserted successfully');</script>";
//  session_start();
//  
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





//  if (mysqli_query($conn, $query)) {
//    echo "New record created successfully";
//    header("location: ./index.php");
//  } else 
//  {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    echo "Account already exists!";
//    header("location:login.php");
//  }
 

?><?php
   
 //print_r($_POST);
 //print_r($_REQUEST);
 
//  if(isset($_POST['Button']))
//  { $fname = $_POST['fname'];
//    $lname=$_POST['lname'];
//    $p1 = $_POST['p1'];
//    $email = $_POST['email'];
//    $mobnum = $_POST['mobnum'];
//    $addr = $_POST['addr'];}
//     $sql = "INSERT INTO user (email, password , fname, lname, contact_no, addr) VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr')";
// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

//  @ $sqlquery =  "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) VALUES ('$email', '$p1', 'good', '$fname', '$lname', '$mobnum', '$addr')";
//    $result = mysqli_query($conn, $sqlquery);
//    if($result)
//  {
// echo "<script>alert('Data inserted successfully');</script>";
// }
// else
// {echo "<script>alert('Data not inserted');</script>";}
// if(isset($_POST['submit']))
// {
// $fname=$_POST['fname'];
// $email=$_POST['email'];
// $mobnum=$_POST['mobnum'];
// $p1=$_POST['p1'];
// $addr=$_POST['addr'];
// $sqlquery="insert into'user'(`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`)
// values('$email', '$p1', 'good', '$fname', '$lname', '$mobnum', '$addr')";

// print $sqlquery;
// //echo mysqli_result();

// $rs=mysqli_query($conn,$sqlquery);
// // $query=mysqli_query($conn,"insert into'user'(`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`)
// // values('$email', '$p1', 'good', '$fname', '$lname', '$mobnum', '$addr')");
// if($rs)
// {
// echo "Data inserted successfully";
// }
// else
// {
// echo "<script>alert('Data not inserted');</script>";
// }
// }

// }
//    if{echo "data inserted..";}
//    else{
//     echo "data not inserted";
//    }
  //{echo "success";}
 //if($sql)

 //echo $_SERVER['PHP_SELF'];
 
  
// if(isset($_POST['submit']))
// {
// $fname=$_POST['fname'];
// $email=$_POST['email'];
// $mobnum=$_POST['mobnum'];
// $lname=$_POST['lname'];
// $p1=$_POST['p1'];
// $addr=$_POST['addr'];

//  $query=mysqli_query($conn,"insert into 'user' ('email', `password`, `fname`, `lname`, `contact_no`, `addr`)  VALUES ('$email', '$p1', '$fname', '$lname', '$mobnum', '$addr')");
// echo "$query";
  

//  if (mysqli_query($conn, $query)) {
//    echo "New record created successfully";
//    header("location: ./index.php");
//  } else 
//  {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    echo "Account already exists!";
//    header("location:login.php");
//  }
 

// if($query)
// {
// echo "<script>alert('Data inserted successfully');</script>";
// }
// else
// {
// echo "<script>alert('Data not inserted');</script>";
// }
//}
//  @$fname = $_POST['fname'];
// @ $lname = $_POST['lname'];
//  @$p1 = $_POST['p1'];
//  @$email = $_POST['email'];
//  @$mobnum = $_POST['mobnum'];
// @ $addr = $_POST['addr'];
// mysqli_select_db('mydb',$conn);


//  $sqlquery = "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) 
//  VALUES ('$email', '$p1', '', '$fname', '$lname', '$mobnum', '$addr')";
//   mysqli_query(  "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) 
//   VALUES ('$email', '$p1', 'nice', '$fname', '$lname', '$mobnum', '$addr')", $conn);
//   {echo "success";}
//  if($sql)
//  $result = mysqli_query($conn, $sqlquery);
//  if (!$result)
//  {
//     echo "data not inserted..";
//  }

 
    // $fn= $_POST['fname'];
    // $ln= $_POST['lname'];
    // $pass= $_POST['p1'];
    // $email= $_POST['email'];
    // $ph= $_POST['mobnum'];
    // $addr= $_POST['addr'];
    // $sqlquery = "INSERT INTO `user` (`email`, `password`, `feedback`, `fname`, `lname`, `contact_no`, `addr`) 
    // VALUES ('$email', '$pass', NULL, '$fn', '$ln', '$ph', '$addr');"
    
    // if(mysqli_query($sqlquery,$conn))
    // {
    //     echo "ERROR: Could not able to execute $sql.";
    // }
   
?>
