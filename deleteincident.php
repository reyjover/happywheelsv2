<?php 
$IncidentID = $_GET['IncidentID'];
?>

<body>
		<br/><br/><br/><br/><br/>
        Are you sure you want to delete the incident record of <?php echo "$IncidentID";?> ?
        </body>
        
    <form action="deleteincident_confirm.php?IncidentID=<?php echo $IncidentID; ?>" method="POST">
	<input type="Submit" name="Submit" value="Delete">
    </form>