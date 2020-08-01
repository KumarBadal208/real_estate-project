<?php
include "connection.php";
$ppd= $_GET['pp'];
$query= "DELETE FROM property WHERE Ppid='$ppd'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<font color= 'green'>Data deleted";
}
else{
    echo "<font color= 'red'>Sorry, data not deleted";
}

?>