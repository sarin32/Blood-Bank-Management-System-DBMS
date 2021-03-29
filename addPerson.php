<?php
session_start();
$_SESSION["tab"] = "Add Person";

if($_SESSION["login"] != 1){
    header('Location: index.php');
}
else{
    if(isset($_POST['submit'])){
        include_once('header.php');

        $name = input_check($_POST['name'],TRUE);  
        $phone = input_check($_POST['phone'],TRUE);  
        $gender = input_check($_POST['gender'],TRUE);  
        $dob = input_check($_POST['dob'],TRUE);  
        $blood_group = input_check($_POST['blood_group'],TRUE);  
        $address = input_check($_POST['address'],TRUE);  
        $med_issues = input_check($_POST['med_issues']);  
        
        if(isset($_SESSION["entry_error"])){
            header('Location: AddPerson.php');
        }

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
            echo '<div style ="color:red;">NB:Please keep your Personal Id for future reference!!!</div>';
        }
        ##################################################
        include_once('footer.php');
    }
    else{
        header('Location: AddPerson.php');
    }
}
function input_check($var, $required=FALSE){
    if($required and empty($var)){
        $_SESSION["entry_error"] = 'please fill the required fields';
    }
    $var = stripcslashes($var);  
    $var = mysqli_real_escape_string($con, $var); 
}
?>
