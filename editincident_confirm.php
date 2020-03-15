<?php
$IncidentID = $_GET['IncidentID'];
$ReservationID = $_GET['ReservationID'];
$type = $_POST['type'];
$description = $_POST['description'];
$location = $_POST['location'];
$date = $_POST['date'];

include 'connect.php';

$sql = "UPDATE tblincident SET
Type_of_Incident = '$type',
Incident_Description = '$description',
Location = '$location',
Date_of_Incident = '$date'
WHERE IncidentID = $IncidentID";

$query= mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location:index.php?loadnav=incidentrecords");
?>