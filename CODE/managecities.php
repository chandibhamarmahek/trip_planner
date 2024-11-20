<?php session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}?>
<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
	<style>
        nav {
	           background-color: #333;
            }
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>

<?php

 include "dashboardinc.php";
include "connection.php";
$sql = "select * FROM city	";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>CITY ID</th><th>CITY NAME</th><th>Edit</th><th>Delete</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['city_id']."</td>";
        echo "<td>".$row['city_name']."</td>";
       
        echo "<td><a href='editcity.php?city_id=".$row['city_id']."'>Edit</a></td>";
        echo "<td><a href='deletecity.php?city_id=".$row['city_id']."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// mysqli_close($conn);
?>
<?php
	include "footer.php";
  
	
	?>
</body>
</html>