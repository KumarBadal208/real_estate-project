<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Mysite</title>
</head>
<body>

<br><form action="site.php" method="post">
id :<br> <input type="text" name="id" required><br><br>
username :<br> <input type="text" name="username" required><br><br>
password :<br> <input type="text" name="password" required>

<br><br>
<input type="submit" name="submit" value="INSERT">
<br><br>

</form>

  <?php
  
  if(isset($_POST["id"])){
      
$id = $_POST["id"];
$nm = $_POST["username"];
$pass = $_POST["password"];

if($id!="" && $nm!="" && $pass!=""){
$query= "INSERT INTO signin VALUES('$id','$nm','$pass')";

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