<?php
$sql = "SELECT * FROM tblreservation";
include 'connect.php';

    if(isset($_POST['search'])){
        $search= $_POST['search'];
        $category= $_POST['category'];

        $sql = "SELECT * FROM tblreservation
        WHERE $category LIKE '%$search%'";

    }  else {
        $sql = "SELECT * FROM tblreservation";
    }

$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


?>

<html> 
    <head> <title> Reservation Records  </title> </head>
    <body> <br/><br/><br/><br/>
            <form class="search" method="POST" action="index.php?loadnav=records">
            <b> Search by: </b>  
            <select name="category">
            <option value="ReservationID"> Reservation ID  </option>
            <option value="Starting_Route"> Starting Route </option>
            <option value="Ending_Route"> Destination </option>
            </select> 
			<input type="text" name="search">
			<input type ="submit" name="submit" value="Go"> 
			</form>
    <br/>

            <table border=1> 
                <tr> 
                    <td> Reservation ID </td> 
                    <td> Car ID </td>
                    <td> Customer ID </td>
                    <td> Reserved Date </td> 
                    <td> Return Date </td> 
                    <td> Starting Route </td>
                    <td> End Route </td> 
                    <td> Initial Car Mileage </td> 
                    <td> Returning Car Mileage </td> 
                    <td colspan="2"> Actions </td>
                </tr> 
            <?php
            while($r=mysqli_fetch_assoc($query))
            {
            ?>
                <tr> 
                <td> <?php echo $r['ReservationID'];?></td> 
                <td> <?php echo $r['CarID'];?></td> 
                <td> <?php echo $r['CustomerID'];?></td> 
                <td> <?php echo $r['Date_Reserved'];?></td> 
                <td> <?php echo $r['Return_Date'];?></td> 
                <td> <?php echo $r['Starting_Route'];?></td> 
                <td> <?php echo $r['Ending_Route'];?></td> 
                <td> <?php echo $r['Starting_Car_Mileage'];?></td> 
                <td> <?php echo $r['Returning_Car_Mileage'];?></td> 
                <td> <a href="index.php?loadnav=addincidents&&ReservationID=<?php echo $r['ReservationID'];?>"> POST INCIDENT </td>
                </tr>
            <?php } ?>

            </table> 
    </body> 

</html> 