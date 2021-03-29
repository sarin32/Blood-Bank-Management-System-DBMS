<?php
session_start();
$_SESSION["tab"] = "Add User";

if($_SESSION["login"] != 1)
  echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
  include_once('header.php');

		###########contents of div goes here###########
  echo '
  <form name="addUser" action = "addUser.php"  method = "POST">
  <h2>Add User</h2>
  <br>

  <p>  
  <label>Super Admin Password: </label>  
  <br>
  <input type = "password" name  = "super_pwd" class="input" required/>  
  </p>  
  <p>  
  <label>Username: </label>  
  <br>
  <input type = "text" name  = "usr_name" class="input" required/>  
  </p>  
  <p>  
  <label>Password: </label>  
  <br>
  <input type = "password" name  = "usr_pwd" class="input" required/>  
  </p>  
  <p>  
  <label>Confirm Password: </label>  
  <br>
  <input type = "password" name  = "usr_cnfrm_pwd" class="input" required/>  
  </p>  

  <p>
  <button class="btn">Create User</button>
  </p>
  </form>';
		##################################################
  include_once('footer.php');
}
?>
