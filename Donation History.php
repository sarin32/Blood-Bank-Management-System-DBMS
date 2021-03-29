<?php
session_start();
$_SESSION["tab"] = "Donation History";

if($_SESSION["login"] != 1)
	echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
	include_once('header.php');

		###########contents of div goes here###########
	echo '				<form name="donationHistory" action = "donationHistory.php"  method = "POST">
	<h2>Donation History</h2>
	<br>
	<p>
	Specify time interval to view the donation history 
	</p>

	
	<p>
	<label>After: </label>  
	<br>
	<input type = "date" name  = "sdate" class="input" required/>  
	</p>  

	<p>
	<label>Before: </label>  
	<br>
	<input type = "date" name  = "edate" class="input" required/>  
	</p>  

	<p>
	<button class="btn">Search</button>
	</p>

	</form>';

		##################################################
	include_once('footer.php');
}
?>
