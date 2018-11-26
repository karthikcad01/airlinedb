<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"Aero")or die("Connection Failed");
$city = $_POST['city'];
$city1 = $_POST['city1'];

$query = "select * from aeroplanedetails where city = '$city' AND city1 = '$city1'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#b3d9ff\">

<tr> 

<td width=100>AirID:</td> 
<td width=100>Departure :</td> 
<td width=100>Destination:</td> 
<td width=100>Airlines:</td>   
</tr>"; 
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['AirID'] . "</td>"; 
print "<td>" . $row['city'] . "</td>"; 
print "<td>" . $row['city1'] .  "</td>"; 
print "<td>" . $row['airlines'] . "</td>";
print "</tr>"; 
}
print "</table>"; 
?>