<html>
<head>
<title>Display</title>
 <style type="text/css">
 body{
	background-image:url("p1.jpg");
	background-size: cover;}
	h1 {color:black;}
		h1 {background-color:orange;}
		h1 {text-align:center;}
		
		h3 > a {color:green;
				font-size:15px;}
		</style>
</head>

<body>
<form action="insert.html" method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aero";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Cid=$_POST["Cid"];
$sql = "CALL data('".$Cid."')";
$result = $conn->query($sql);
   echo "<table border='2' bordercolor='black' width='100%'>
<tr>
<th>Cid</th>
<th>Name</th>
<th>Class</th>
<th>Depature</th>
<th>Destination</th>
<th>Airlines</th>
</tr></center>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['Cid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['class'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['city1'] . "</td>";
echo "<td>" . $row['airlines'] . "</td>";
"</tr> ";
};
echo "</table>";
?>
</body>
</html>