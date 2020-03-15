<?php
$ReservationID=$_GET['ReservationID'];
$CarID= $_GET['CarID'];
$returningmileage=$_POST['returningmileage'];
$avail = "YES";
include 'connect.php';

$sql = "UPDATE tblreservation SET Returning_Car_Mileage=$returningmileage WHERE ReservationID = $ReservationID";

$sqlavail =  "UPDATE tblcars SET Car_Availability='$avail',
Total_Mileage='$returningmileage'
 WHERE CarID = '$CarID';";

$queryavail= mysqli_query($connect,$sqlavail) or die (mysqli_error($connect));
$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location:index.php?loadnav=records");
?>