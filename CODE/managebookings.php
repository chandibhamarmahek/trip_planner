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
$sql = "select * FROM booking	";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>EMAIL</th><th>BOOKING ID</th>
    <th>ROOM ID</th><th>PRICE</th>
    <th>FROM DATE</th><th>TO DATE</th><th>Edit</th><th>Delete</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['book_id']."</td>";
        echo "<td>".$row['room_id']."</td>";
        echo "<td>".$row['total_price']."</td>";
        echo "<td>".$row['from_date']."</td>";
        echo "<td>".$row['to_date']."</td>";

        echo "<td><a href='updatebook.php?book_id=".$row['book_id']."'>Edit</a></td>";
        echo "<td><a href='deletebookings.php?book_id=".$row['book_id']."'>Delete</a></td>";
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