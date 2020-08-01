<?php
include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
<title>Propert_Insert page</title>
</head>
<body>
<style>
body{
    background-image: url("image/property_bc6.jpg");
    background-size: cover;
}

.ff{
    color:brown;
    background-color:burlywood;
}

.cont{
    max-width: 80%;
    padding: 40px;
    margin: auto;
    
}

.gg{
padding: 20px;
background-color: darkgray; 
}

    h1{
        color:black;
        background-color: blueviolet;
        text-align: center;
        padding: 20px;
    }

input{
    width: 80%;
    margin: 11px auto;
    padding: 10px;
    font-size: 15px;
    border: 2px solid black;
    border-radius: 10px;
}
 
.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 5px solid white;
    border-radius: 14px;
    cursor: pointer;
}

</style>


<h1>WELCOME TO Property REGISTRATION PAGE</h1>
<main>
<div class="cont">
    <form action="Property_insert.php" method="post">
        <p><input type="text" name="Ppid" id="Ppid" placeholder="Enter your Property id" required></p>
        <p><input type="text" name="Pid" id="Pid" placeholder="Enter your Owner id " required></p>
        <p><input type="text" name="No_room" id="No_room" placeholder="Enter number of room" required></p>
        <p><input type="text" name="No_bedroom" id="No_bedroom" placeholder="Enter number of bedroom" required></p>
        <p><input type="text" name="Size" id="Size" placeholder="Enter the size of property" required></p>
        <p><input type="text" name="Price" id="Price" placeholder="Enter The Price" required></p>
        <p><input type="text" name="Type" id="Type" placeholder="type=Rent or Sell" required></p>
        <p><input type="text" name="Town" id="Town" placeholder="Enter Town" required></p>
        <p><input type="text" name="Village_street" id="Village_street" placeholder="Enter Village_street" required></p>
        <p><input type="text" name="Home_no" id="Home_no" placeholder="Enter Home_number" required></p>
        <p><input type="text" name="Avalability" id="Avalability" placeholder="Enter Avalability" required></p>



        <input type="submit" class="btn" name="submit" value="Submit">
    </form>

    </div>
</main>

<?php

if(isset($_POST["Ppid"])){
      
    $id = $_POST["Ppid"];
    $nm = $_POST["Pid"];
    $tn = $_POST["No_room"];
    $vs = $_POST["No_bedroom"];
    $hn = $_POST["Size"];
    $us = $_POST["Price"];
    $pass =$_POST["Type"];
    $pn = $_POST["Town"];
    $a = $_POST["Village_street"];
    $b = $_POST["Home_no"];
    $c = $_POST["Avalability"];
    
    if($id!="" && $nm!="" && $tn!="" && $vs!="" && $hn!="" && $us!="" && $pass!="" && $pn!="" && $a!="" && $b!="" && $c!=""){
    $query= "INSERT INTO property VALUES('$id','$nm','$tn','$vs','$hn','$us','$pass','$pn','$a','$b','$c')";
    
    $data= mysqli_query($conn,$query);
    
    if($data){
        echo "Thanks for inserting data";
    }
      
      }
      else{
          echo "All the fields are required";
      }
    
    }


?>


</body>
</html>