<html>
<head>
<title>Display</title>
 <style type="text/css">
 body{
	background-image:url("new.jpg");
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
$sql = "Select * from pilotdetails";
$result = $conn->query($sql);
   echo "<table border='2' bordercolor='black' width='100%'>
<tr>
<th>Name</th>
<th>PID</th>
<th>Age</th>
<th>Gender</th>
<th>AirID</th>
</tr></center>";
while($row = mysqli_fetch_array($result))
{
echo "<tr> <td>" . $row['name'] . "</td>";
echo "<td>" . $row['PID'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['gender2'] . "</td>";
echo "<td>" . $row['AirID'] . "</td>";
"</tr> ";
};
echo "</table>";
?>
</body>
</html>