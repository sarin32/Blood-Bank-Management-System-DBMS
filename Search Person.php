<?php
session_start();
$_SESSION["tab"] = "Search Person";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('header.php');

###########contents of div goes here###########
	echo '
	<form name="searchPerson" action = "searchPerson.php"  method = "POST">
	<h2>Search Person</h2>
	<br>

	<p>  
	<label>Personal ID: </label>  
	<br>
	<input type = "text" name  = "pid" class="input" required/>  
	</p>  

	<p>
	<button class="btn">Submit</button>
	</p>
	</form>';

##################################################
	include_once('footer.php');
}
?>
