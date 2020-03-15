<?php
$ReservationID = $_GET['ReservationID'];
$type = $_POST['type'];
$description = $_POST['description'];
$location = $_POST['location'];
$date = $_POST['date'];

include 'connect.php';

$sql = "INSERT INTO tblincident(ReservationID, Type_of_Incident, Incident_Description, Location, Date_of_Incident)
VALUES ($ReservationID, '$type', '$description', '$location', '$date')";
$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location:index.php?loadnav=incidentrecords");
?>