<?php 
$CarID = $_GET['CarID'];
$car = $_POST['car'];
$color = $_POST['color'];
$plate = $_POST['plate'];

include 'connect.php';


$sql= "UPDATE tblcars SET 
Car='$car', 
Car_Color='$color', 
Car_Plate_Number='$plate'
WHERE CarID=$CarID;";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location:index.php?loadnav=cars");

?>