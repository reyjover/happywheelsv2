<?php
$IncidentID = $_GET['IncidentID'];
include 'connect.php';
$sql = "DELETE FROM tblincident WHERE IncidentID = $IncidentID";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
header("location: index.php?loadnav=incidentrecords");
?>