<html>
<head>
<title>Display</title>
 <style type="text/css">
 body{
	background-image:url("cst.jpg");
	background-size: cover;}
	h1 {color:black;}
		h1 {background-color:orange;}
		h1 {text-align:center;}
		
		h3 > a {color:green;
				font-size:15px;}
		</style>
</head>

<body>
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

$Cid = $_POST["Cid"];
$name = $_POST["name"];
$age = $_POST["age"];
$class=$_POST["class"];
$bdate=$_POST["bdate"];
$gender = $_POST["gender"];
$meal = $_POST["meal"];
$bdate = $_POST["bdate"];
$AirID = $_POST["AirID"];



$sql = "INSERT INTO airlinedetails(Cid,name,age,gender,meal,class,bdate,AirID) VALUES ('".$Cid."','".$name."','".$age."','".$gender."','".$meal."','".$class."','".$bdate."','".$AirID."')";

if ($conn->query($sql) === TRUE) {
    echo "Ticket has been booked successfully";
} else {
    echo "Error: Check if u have filled correctly ";
}
$conn->close();
?> 
</body>
</html>