<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

.hiiii {
  background-color: white;
  color: grey;
  padding: 12px 20px;
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
     
<nav class="navbar">
        <ul class="navlist">
            <div class="logo"><img src="logo.png" alt="logo"></div>
            <li><a href="index.php#">Home</a></li>
            <li><a href="aboutus.php#">About</a></li>
            <li><a href="contactus.php#">Contact</a></li>
            <!-- <li><a href="">Services</a></li> -->
            <li><a href="users.php#">Profile</a></li>
        </ul>
        <div class="rightnav"> <form action="logout.php" method = "post">

        <input type="submit" class = "hiiii" name = logout value = Logout>
        
        </form>
               
        </div>
    </nav>
</body>
</html>