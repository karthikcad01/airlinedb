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


$name=$_POST["name"];
$PID=$_POST["PID"];
$Age=$_POST["Age"];
$gender2=$_POST["gender2"];
$AirID=$_POST["AirID"];

$sql = "INSERT INTO pilotdetails(name,PID,age,gender2,AirID) 
VALUES('".$name."','".$PID."','".$Age."','".$gender2."','".$AirID."')";

if ($conn->query($sql) === TRUE) {
    echo "Pilot details inserted successfully";
} else {
    echo "Error: Check if u have filled the details correctly " ;
}
$conn->close();
?> 



