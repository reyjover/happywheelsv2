<?php
$IncidentID = $_GET['IncidentID'];
$ReservationID = $_GET['ReservationID'];

$sql = "SELECT * FROM tblincident WHERE IncidentID = $IncidentID";
include 'connect.php';
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($query);

$sqlres = "SELECT * FROM tblreservation WHERE ReservationID = $ReservationID";
$queryres = mysqli_query($connect,$sqlres) or die (mysqli_error($connect));
$rres = mysqli_fetch_assoc($queryres);

?>
<br/> <br/> <br/> <br/> 
<body> 
<form method="POST" action="editincident_confirm.php?IncidentID=<?php echo $IncidentID;?>&&ReservationID=<?php echo $ReservationID;?>">
What is the type of incident? 
<select name="type">
<option value="<?php echo $r['Type_of_Incident'];?>"> <?php echo $r['Type_of_Incident'];?> </option> 
<option value="VEHICLE&nbsp;ROLLOVER"> VEHICLE ROLLOVER </option>
<option value="SINGLE&nbsp;CAR&nbsp;ACCIDENT"> SINGLE CAR ACCIDENT </option>
<option value="REAR-END&nbsp;COLLISION"> REAR-END COLLISION </option>
<option value="SIDE-IMPACT&nbsp;COLLISION"> SIDE-IMPACT COLLISION </option>
<option value="HEAD-ON&nbsp;COLLISION"> HEAD-ON COLLISION </option>
</select> 
<br/><br/>
Incident Description: <br/>
<textarea name="description" rows="5" cols="100" > <?php echo $r['Incident_Description'];?> </textarea>
<br/><br/>
Location: 
<select name="location" /required>
<option value="<?php echo $r['Location'];?>"> <?php echo $r['Location'];?> </option> 
    <option value="Bacolod">Bacolod </option>
    <option value="Bago"> Bago</option>
    <option value="Binalbagan"> Binalbagan </option>
    <option value="Cadiz"> Cadiz </option>
    <option value="Calatrava"> Calatrava </option>
    <option value="Candoni"> Candoni </option>
    <option value="Cauayan"> Cauayan </option>
    <option value="Enrique&nbsp;B.Magalona "> Enrique B. Magalona (Saravia) </option>
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
<br/><br/> 

Date Reserved: <b> <?php echo $rres['Date_Reserved'];?> </b> <br/> <br/> 
Date Returned: <b> <?php echo $rres['Return_Date'];?> </b> <br/> <br/> 

Input Date of Incident: <?php echo $r['Date_of_Incident'];?> <br/>
<input type="date" name="date" min="<?php echo $rres['Date_Reserved'];?>" max="<?php echo $rres['Return_Date'];?>">
<br/> <br/> 
<input type="submit" name="submit" value="Update Incident Record">
</form>
</body>