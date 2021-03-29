<?php
session_start();
$_SESSION["tab"] = "Donation History";

if($_SESSION["login"] != 1)
    echo '<h2>Authentication Error!!!</h2>';
else{
    include_once('header.php');
    $sdate = $_POST['sdate'];  
    $edate = $_POST['edate'];  
    
    $sql = "select d.d_date, d.d_time, d.d_quantity, p.p_id, p.p_name, p_phone, p.p_blood_group from Person p,Donation d where p.p_id = d.p_id and d.d_date >= '$sdate' and d.d_date <= '$edate'";  
    $result = mysqli_query($con, $sql);  
        ###########contents of div goes here###########

    echo "<h2>Donation History</h2><br>";            

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
        </tr>";
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
            <td>" . $row["p_id"]. "</td>
            <td>" . $row["p_name"]."</td>
            <td>" .$row["p_phone"] ."</td>
            <td>" . $row["p_blood_group"]. "</td>
            <td>" . $row["d_date"]. "</td>
            <td>" . $row["d_time"]. "</td>
            <td>" . $row["d_quantity"]. "</td>
            </tr>";
        }
        echo "</table> <br><br>";
    }
    else
        echo "No record found in the specified intervel";
    include_once('footer.php');
}
?>  