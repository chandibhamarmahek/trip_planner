
<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
		input[type="text"], input[type="password"] {
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
</head>
<body><br><br><br><br><br>
<form action="login_code.php" method="post">
		<label for="email">Email</label>
		<input type="text" id="email" name="email" required>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" required>

		<input type="submit" name ="login" id="login" value="Login">
	</form></body>
  </html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body><form action="login_code.php" method="post">

    <div class="container" align="center"><br><br><br>
    <label for="uname"><b align="center">Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <br><br><br>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <label><br><br><br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br><br>
       <button type="button" class="cancelbtn">Cancel</button> -->
      <!-- <span class="psw">Forgot <a href="#">password?</a></span><br><br><br>
      <button type="submit">Login</button>
      -->
    <!-- </div>
  </form>
</body>
</html> --> 
