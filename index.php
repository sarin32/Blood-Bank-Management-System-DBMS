<!DOCTYPE html>
<html>  
	<head>  
		<title>
			Blood Bank Management System
		</title>  
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
	</head>  
	<body>  
		<div class="title">	
			<center>
				<img src="res/images/logo.png" height = "100" width="100" align="top">
				<h1>BLOOD BANK MANAGEMENT SYSTEM</h1><br>
			</center>
		</div>
		<form name="f1" action = "login.php" method = "POST">  
			<h2>Login</h2>
			
			<?php
			session_start();
			if(isset($_SESSION["login_error"])){
				echo "<p class='error'>" .$_SESSION["login_error"]. "</p>";
				unset($_SESSION["login_error"]);
			}
			?>
			
			<p>  
				<label> UserName: </label><br><br>
				<input type = "text" class ="input" name  = "user" placeholder="Enter UserName" required />  
			</p>  
			<p>  
				<label> Password: </label>  
				<br><br>
				<input type = "password" class="input" name  = "pass" placeholder="Enter password" required />  
			</p>  
			<p>     
				<input type ="submit" id = "btn" value = "Login" name="submit"/>  
			</p>  
		</form>   
	</body>     
</html>  
