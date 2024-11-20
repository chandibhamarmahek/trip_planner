<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
.hiiii {
  background-color: white;
  color: grey;
  padding: 10px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right : 13px
  
}

.hiiii:hover {
  background-color: black;
}

    </style>
</head>
<body>
<nav>
			<ul>
				<li><a href="dashboard.php#">Dashboard</a></li>
				<li><a href="manageusers.php#">Manage users</a></li>
				<li><a href="managebookings.php#">Manage bookings</a></li>
				<li><a href="managecities.php#">Manage cities</a></li>
				<li><a href="logout.php#"> Logout</a></li>
				<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 -->
			
				<!-- <input type="submit" class = "hiiii" name = logout value = Logout> -->
			</ul>
		</nav>
</body>
</html>