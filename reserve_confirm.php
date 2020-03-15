<?php
$mileage= $_GET['mileage'];
$customer= $_POST['customer'];
$car= $_POST['car'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$initmileage = $_POST['initmileage'];
$returningmileage = "To be recorded upon arrival.";
$avail = "NO";
include'connect.php';


$sql = "INSERT INTO tblreservation(CustomerID, CarID, Date_Reserved, Return_Date, Starting_Route, Ending_Route, Starting_Car_Mileage, Returning_Car_Mileage)
VALUES ($customer, $car, '$startdate','$enddate', '$pickup', '$dropoff', '$mileage', '$returningmileage' )";

$sqlavail = "UPDATE tblcars SET Car_Availability='$avail' WHERE CarID = '$car';";
$queryavail= mysqli_query($connect,$sqlavail) or die (mysqli_error($connect));

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));

header("location: index.php?loadnav=records");


?>