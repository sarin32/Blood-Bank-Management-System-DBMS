<?php
session_start();
$_SESSION["tab"] = "Add Person";

if($_SESSION["login"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{
    include_once('header.php');
    $name = $_POST['name'];  
    $phone = $_POST['phone'];  
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];
    $med_issues = $_POST['med_issues'];

    $sql = "insert into Person (p_name,p_phone, p_dob, p_address, p_gender, p_blood_group, p_med_issues) values('$name', '$phone', '$dob', '$address', '$gender', '$blood_group', '$med_issues')";  
    if ($con->query($sql) === TRUE) {
        $sql = "select p_id from Person where p_name ='$name' and p_phone = '$phone' and p_gender = '$gender' and p_dob = '$dob' and p_blood_group = '$blood_group' and p_address = '$address' and p_med_issues = '$med_issues'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
        $pid = $row['p_id'];  
    }
    else 
        echo "Error: " . $sql . "<br>" . $con->error;
        ###########contents of div goes here###########
    if($count == 1){  
        echo'<h2>' .$name .'</h2><br><br>';
        echo 'Your registration is succesful..<br><br>';
        echo'Personal Id : '.$pid .'<br><br>';
        echo'Name : '.$name .'<br><br>';
        echo 'Phone Number: ' .$phone .'<br><br>';
        echo 'DOB : ' .$dob .'<br><br>';
        echo 'Blood Group : ' .$blood_group .'<br><br>';

        echo 'Gender : ';
        if ($gender === 'm')
            echo 'Male<br><br>'; 
        if ($gender === 'f')
            echo 'Female<br><br>'; 
        if ($gender === 'o')
            echo 'Others<br><br>'; 
        echo 'Address : ' .$address .'<br><br>';
        echo 'Medical Issues : ';
        if ($med_issues === "")
            echo 'None<br><br>';
        echo '<div style ="color:red;">NB:Please keep your Personal Id for future reference!!!';
    }
        ##################################################
    include_once('footer.php');
}
?>