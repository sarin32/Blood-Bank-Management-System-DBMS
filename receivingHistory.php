<?php
session_start();
$_SESSION["tab"] = "Receiving History";

if($_SESSION["login"] != 1)
	echo '<h2>Authentication Error!!!</h2>';
else{
	include_once('header.php');
	$sdate = $_POST['sdate'];  
	$edate = $_POST['edate'];   
	
	$sql = "select r.r_date, r.r_time, r.r_hospital, r.r_quantity, p.p_id, p.p_name, p_phone, p.p_blood_group from Person p,Receive r where p.p_id = r.p_id and r.r_date >= '$sdate' and r.r_date <= '$edate'";  
	$result = mysqli_query($con, $sql);  
	
		###########contents of div goes here###########

	echo "<h2>Receiving History</h2><br>";            

	if ($result->num_rows > 0) {
		echo "<table>
		<tr>
		<th>Personal ID</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Blood Group</th>
		<th>Date</th>
		<th>Time</th>
		<th>Units of Blood</th>
		<th>Hospital</th>
		</tr>";
		while($row = $result->fetch_assoc()) {
			echo "
			<tr>
			<td>" . $row["p_id"]. "</td>
			<td>" . $row["p_name"]."</td>
			<td>" .$row["p_phone"] ."</td>
			<td>" . $row["p_blood_group"]. "</td>
			<td>" . $row["r_date"]. "</td>
			<td>" . $row["r_time"]. "</td>
			<td>" . $row["r_quantity"]. "</td>
			<td>" . $row["r_hospital"]. "</td>
			</tr>";
		}
		echo "</table> <br><br>";
	}

	else
		echo "No record found in the specified intervel";
	include_once('footer.php');
}    

?>  