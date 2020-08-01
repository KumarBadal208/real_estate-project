<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property_update</title>
</head>
<body>
    <style>
body{
    background-image: url("image/property_bc7.jpg");
    background-size: cover;
}
 td{
     padding: 10px;
     color: black;
 }

 th{
     padding: 10px;
 }

    </style>
</body>
</html>



<?php
include "connection.php";
error_reporting(0);

$query= "SELECT * FROM property";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0){
?>
<table>
    <tr>
<th>Ppid</th>
<th>Pid</th>
<th>No_room</th>
<th>No_bedroom</th>
<th>Size</th>
<th>Price</th>
<th>Type</th>
<th>Town</th>
<th>Village_street</th>
<th>Home_no</th>
<th>Avalability</th>
<th colspan="2">Operation</th>
    </tr>
        
<?php
while($result= mysqli_fetch_assoc($data)){

    echo "<tr>
    <td>".$result['Ppid']."</td>
    <td>".$result['Pid']."</td>
    <td>".$result['No_room']."</td>
    <td>".$result['No_bedroom']."</td>
    <td>".$result['Size']."</td>
    <td>".$result['Price']."</td>
    <td>".$result['Type']."</td>
    <td>".$result['Town']."</td>
    <td>".$result['Village_street']."</td>
    <td>".$result['Home_no']."</td>
    <td>".$result['Avalability']."</td>
    <td><a href='Property_edit_update.php?pp=$result[Ppid] & pd=$result[Pid] & rm=$result[No_room] & bd=$result[No_bedroom] & sz=$result[Size] & pc=$result[Price] & tp=$result[Type] & tn=$result[Town] & vs=$result[Village_street] & hn=$result[Home_no] & av=$result[Avalability]'>Edit</a></td> 
    <td><a href='property_delete.php?pp=$result[Ppid]'>Delete</a></td>   
    </tr>";

}
   }
   else{
       echo "NO RECORDS";
   }


?>
</table>
