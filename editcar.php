<?php
$CarID = $_GET['CarID'];
$sql = "SELECT * FROM tblcars WHERE CarID = $CarID";
include 'connect.php';
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($query);
?>
<html>
<head>
	<title> Edit Car </title>
</head>
<body>
	<br/><br/><br/><br/><br/>
	<form method="POST" action="index.php?loadnav=editcar_confirm&&CarID=<?php echo $CarID;?>"> 
		Car: 
		<input type="text" name="car" placeholder="" value="<?php echo $r['Car'];?>"/required> <br/>
        Color:  
		<input type="text" name="color" placeholder="" value="<?php echo $r['Car_Color'];?>"/required> <br/>
        Plate Number: 
		<input type="text" name="plate" placeholder="" value="<?php echo $r['Car_Plate_Number'];?>"/required> <br/>
        
			<input type="submit" name="submit" name="Submit">
	</form>


</body>
</html>