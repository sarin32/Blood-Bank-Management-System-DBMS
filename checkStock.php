<?php
if($_SESSION["login"] != 1)
    echo '<h2 txtcolor="red">Authentication Error!!!</h2>';
else{   
    $sql = "select * from Stock";  
    
    $result = $con->query($sql);
    

    if ($result->num_rows > 0) {

        echo "<h2>Stock</h2><br>";    
        echo "<table><tr><th>Blood Group</th><th>Units of blood</th></tr>";

            // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["s_blood_group"]. "</td><td>" . $row["s_quantity"]."</td></tr>";
        }
        echo "</table>";
    }
}
?>  