
<?php session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php"); // redirect to the login page
    exit;
}?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Manage Records</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Global styles */
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 1.5;
	color: #333;
	background-color: #f0f0f0;
}

.wrapper {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

/* Header styles */
header {
	background-color: #1abc9c;
	color: #fff;
	padding: 10px;
}

header h1 {
	margin: 0;
	font-size: 24px;
}

/* Navigation styles */
nav {
	background-color: #333;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav ul li {
	display: inline-block;
}

nav ul li a {
	display: block;
	padding: 10px;
	color: #fff;
	text-decoration: none;
}

nav ul li a:hover {
	background-color: #555;
}

/* Main content styles */
main {
	background-color: #fff;
	padding: 20px;
	margin-top: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Record management styles */
.records {
	margin-bottom: 20px;
}

.records h2 {
	margin-top: 0;
}

.records table {
	width: 100%;
	border-collapse: collapse;
}

.records th{
    padding: 10
    color :green;
}
.records td {
    padding: 10
}
	

    </style>
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Manage Records</h1>
		</header>
		<nav>
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</nav>
		<main>
			<section class="records">
				<h2>Records</h2>
				<table>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Actions</th>
					</tr>
					<tr>
						<td>1</td>
						<td>John Smith</td>
						<td>john@example.com</td>
						<td>
							<a href="#">Edit</a>
							<a href="#">Delete</a>
						</td>
					</tr>
				</table>
				<button>Add New Record</button>
			</section>
		</main>
	</div>
</body>
</html> -->




<!-- <!DOCTYPE html>
<html>
<head>
	<title>Manage Records</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			font-size: 14px;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
		}

		h1 {
			margin: 0;
		}

		nav {
			background-color: #f2f2f2;
			padding: 10px;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		nav li {
			margin-right: 10px;
		}

		nav li a {
			display: block;
			padding: 10px;
			color: #333;
			text-decoration: none;
		}

		nav li a:hover {
			background-color: #333;
			color: #fff;
		}

		main {
			padding: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		table th, table td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ccc;
		}

		table th {
			background-color: #f2f2f2;
			font-weight: bold;
			text-transform: uppercase;
		}

		.edit-record, .add-record {
			display: none;
		}

		form label {
			display: inline-block;
			width: 100px;
			margin-bottom: 5px;
		}

		form input[type="text"], form input[type="email"] {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			max-width: 300px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}

		form button {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		form button:hover {
			background-color: #444;
		}
	</style>
</head>
<body>
	<header>
		<h1>Manage Records</h1>
	</header>
	<!-- <nav>
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</nav> -->
	<!-- <main>
		<section class="records">
			<h2>Records</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>John Smith</td>
						<td>john@example.com</td>
						<td>
							<a href="#" onclick="showEditRecord(1)">Edit</a>
							<a href="#" onclick="deleteRecord(1)">Delete</a>
						</td>
					</tr>
                 </tbody>
            </table>		
        </section>
    </main>
</body>
</html> --> 

<!DOCTYPE html>
<html>
<head>
	<title>View Records</title>
	<style>
		nav {
	background-color: #333;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav ul li {
	display: inline-block;
}

.align{
	align: center;
}

nav ul li a {
	display: block;
	padding: 10px;
	color: #fff;
	text-decoration: none;
}

nav ul li a:hover {
	background-color: #555;
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
// Connect to the database

include "connection.php";
include "dashboardinc.php";
// Check connection


// Select data from the table
$sql = "select * FROM user	";
$result = mysqli_query($conn, $sql);

// Display data in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>EMAIL</th><th>PASSWORD</th><th>FIRST NAME</th><th>LAST NAME</th><th>CONTACT</th><th>ADDRESS</th><th>Edit</th><th>Delete</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['contact_no']."</td>";
		echo "<td>".$row['address']."</td>";
        echo "<td><a href='editusers.php?email=".$row['email']."'>Edit</a></td>";
        echo "<td><a href='deleteuser.php?email=".$row['email']."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>

