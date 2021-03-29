<?php
session_start();
$_SESSION["tab"] = "Check Stock";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('header.php');

		###########contents of div goes here###########
	include_once('checkStock.php');

		##################################################
	include_once('footer.php');
}
?>
