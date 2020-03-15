<?php
include 'connect.php';
$sqlcustomer = "SELECT * FROM tblcustomer";
$querycustomer = mysqli_query($connect,$sqlcustomer) or die (mysqli_error($connect));

$sqlcar = "SELECT * FROM tblcars WHERE Car_Availability = 'YES'";

$querycar = mysqli_query($connect,$sqlcar) or die (mysqli_error($connect));
$sqlcar2 = "SELECT * FROM tblcars";
$querycar2 = mysqli_query($connect,$sqlcar2) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($querycar2);
?>

    <br/><br/><br/> <br/>
    <form method="POST" action="reserve_confirm.php?mileage=<?php echo $r['Total_Mileage'];?>">
    Who is the one making a reservation? <br/>
    <select name="customer"> 
    <option> </option>
		<?php
            while($rcustomer=mysqli_fetch_assoc($querycustomer))
            {
            ?>
		<option value="<?php echo $rcustomer['CustomerID'];?>" /required>  <?php echo $rcustomer['Customer_Firstname'];?> <?php echo $rcustomer['Customer_Lastname'];?>  </option>
        <?php 
        } 
        ?>
    </select>
        <br/> <br/> 

    Which car are they going to reserve? <br/> 
    <select name="car"> 
    <option> </option>
    <?php
            while($rcar=mysqli_fetch_assoc($querycar))
            {
            ?>
		<option value="<?php echo $rcar['CarID'];?>"> <?php echo $rcar['Car'];?>  </option>
        <?php 
        } 
        ?>
    </select> 
    <br/> <br/> 
    When are they going to rent it?  <input type="date" name="startdate" /required>
    <br/> 
    When are they going to return it?  <input type="date" name="enddate" /required>
    <br/> <br/> 
    Starting Route?  <br/>  
    <select name="pickup" /required>
    <option value="Bacolod">Bacolod </option>
    <option value="Bago"> Bago</option>
    <option value="Binalbagan"> Binalbagan </option>
    <option value="Cadiz"> Cadiz </option>
    <option value="Calatrava"> Calatrava </option>
    <option value="Candoni"> Candoni </option>
    <option value="Cauayan"> Cauayan </option>
    <option value="Enrique&nbsp;B.&nbsp;Magalona "> Enrique B. Magalona (Saravia) </option>
    <option value="Escalante"> Escalante </option>
    <option value="Himamaylan"> Himamaylan </option>
    <option value="Hinigaran"> Hinigaran </option>
    <option value="Hinoba-an"> Hinoba-an </option>
    <option value="Ilog"> Ilog </option>
    <option value="Isabela"> Isabela </option>
    <option value="Kabankalan"> Kabankalan </option>
    <option value="La Carlota"> La Carlota </option>
    <option value="La Castellana"> La Castellana </option>
    <option value="Manapla"> Manapla </option>
    <option value="Moises&nbsp;Padilla"> Moises Padilla </option>
    <option value="Murcia"> Murcia </option>
    <option value="Pontevedra"> Pontevedra </option>
    <option value="Pulupandan"> Pulupandan </option>
    <option value="Sagay"> Sagay </option>
    <option value="Salvador&nbsp;Benedicto"> Salvador Benedicto </option>
    <option value="San&nbsp;Carlos"> San Carlos </option>
    <option value="San&nbsp;Enrique"> San Enrique </option>
    <option value="Silay"> Silay </option>
    <option value="Sipalay"> Sipalay </option>
    <option value="Talisay"> Talisay </option>
    <option value="Toboso"> Toboso </option>
    <option value="Valladolid"> Valladolid </option>
    <option value="Victorias"> Victorias </option>
    </select> 
    <br/> <br/>  


   End Route?  <br/>
    <select name="dropoff" /required>
    <option value="Bacolod">Bacolod </option>
    <option value="Bago"> Bago</option>
    <option value="Binalbagan"> Binalbagan </option>
    <option value="Cadiz"> Cadiz </option>
    <option value="Calatrava"> Calatrava </option>
    <option value="Candoni"> Candoni </option>
    <option value="Cauayan"> Cauayan </option>
    <option value="Enrique&nbsp;B.&nbsp;Magalona "> Enrique B. Magalona (Saravia) </option>
    <option value="Escalante"> Escalante </option>
    <option value="Himamaylan"> Himamaylan </option>
    <option value="Hinigaran"> Hinigaran </option>
    <option value="Hinoba-an"> Hinoba-an </option>
    <option value="Ilog"> Ilog </option>
    <option value="Isabela"> Isabela </option>
    <option value="Kabankalan"> Kabankalan </option>
    <option value="La Carlota"> La Carlota </option>
    <option value="La Castellana"> La Castellana </option>
    <option value="Manapla"> Manapla </option>
    <option value="Moises&nbsp;Padilla"> Moises Padilla </option>
    <option value="Murcia"> Murcia </option>
    <option value="Pontevedra"> Pontevedra </option>
    <option value="Pulupandan"> Pulupandan </option>
    <option value="Sagay"> Sagay </option>
    <option value="Salvador&nbsp;Benedicto"> Salvador Benedicto </option>
    <option value="San&nbsp;Carlos"> San Carlos </option>
    <option value="San&nbsp;Enrique"> San Enrique </option>
    <option value="Silay"> Silay </option>
    <option value="Sipalay"> Sipalay </option>
    <option value="Talisay"> Talisay </option>
    <option value="Toboso"> Toboso </option>
    <option value="Valladolid"> Valladolid </option>
    <option value="Victorias"> Victorias </option>
    </select> 

    <br/> <br/>  
    <br/> <br/> 
        <input type="submit" name="submit" value="Reserve">

   </form>

