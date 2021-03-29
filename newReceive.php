<?php
session_start();
$_SESSION["tab"] = "New Receive";

if($_SESSION["login"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('header.php');
    
    $pid = $_POST['pid'];  
    $units = $_POST['units']; 
    $hospital = $_POST['hospital']; 

    date_default_timezone_set("Asia/Calcutta"); 
    $date = date('y-m-d');
    $time = date('h:i');

    $sql_1 = "insert into Receive (p_id, r_date, r_time, r_quantity, r_hospital) values('$pid', '$date', '$time', '$units', '$hospital')";  
    $sql_2 = "update  Stock SET s_quantity = s_quantity - '$units' where Stock.s_blood_group = (select p_blood_group FROM Person where p_id = '$pid')";

    if (($con->query($sql_1) === TRUE) and ($con->query($sql_2) === TRUE)) {
                ###########contents of div goes here###########
        echo 'your Receiving is succesful';
                ###############################################
    }
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    include_once('footer.php');
}
?>  