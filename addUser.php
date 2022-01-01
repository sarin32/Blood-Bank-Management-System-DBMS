<?php
session_start();
$_SESSION["tab"] = "Add User";

if ($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else {
	include_once('header.php');
	$super_pwd = $_POST['super_pwd'];
	$usr_name = $_POST['usr_name'];
	$usr_pwd = $_POST['usr_pwd'];
	$usr_cnfrm_pwd = $_POST['usr_cnfrm_pwd'];
	$err = FALSE;

	if (!$err) {
		if ($usr_pwd != $usr_cnfrm_pwd) {
			echo "Passwords Does not match<br>";
			$err = 1;
		}
	}

	if (!$err) {
		$sql = "select * from User where username = 'SuperAdmin' and password = '$super_pwd'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		if ($count != 1) {
			echo "Invalid Super Admin Password<br>";
			$err = 1;
		}
	}

	if (!$err) {
		$sql = "select * from User where username = '$usr_name'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);

		if ($count != 0) {
			echo "username not available<br>";
			$err = 1;
		}
	}

	if (!$err) {
		$sql = "insert into User(username, password) values('$usr_name', '$usr_pwd') ";
		if ($con->query($sql) === TRUE) {

			echo 'New user created successfully';
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}

	include_once('footer.php');
}
