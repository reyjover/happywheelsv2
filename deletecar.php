<?php 
$CarID = $_GET['CarID'];
$Car = $_GET['Car'];
?>

<html>
<head>
	<title> Delete Car</title>
</head>
        <body>
		<br/><br/><br/><br/><br/>
        Are you sure you want to delete record of <?php echo "$Car";?> with an ID of  <?php echo "$CarID";?> ?
        </body>
        
    <form action="deletecar_confirm.php?CarID=<?php echo $CarID; ?>" method="POST">
	<input type="Submit" name="Submit" value="Delete">
    </form>
    
</html>