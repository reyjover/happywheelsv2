<?php 
$carname = $_POST['carname'];
$transmission = $_POST['transmission'];
$color = $_POST['color'];
$plate = $_POST['plate'];
$availability = "YES";
$mileage= $_POST['mileage'];
include'connect.php';


$sql= "INSERT INTO tblcars(Car, Transmission, Car_Color, Car_Plate_Number, Total_Mileage, Car_Availability)
VALUES ('$carname', '$transmission', '$color', '$plate', $mileage, '$availability')";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: index.php?loadnav=cars");

?>
