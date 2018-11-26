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


$AirID=$_POST["AirID"];
$city=$_POST["city"];
$city1=$_POST["city1"];
$airlines=$_POST["airlines"];


$sql = "INSERT INTO aeroplanedetails(AirID,city,city1,airlines) 
VALUES('".$AirID."','".$city."','".$city1."','".$airlines."')";

if ($conn->query($sql) === TRUE) {
    echo "Aeroplane details inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 




