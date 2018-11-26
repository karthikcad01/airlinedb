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


$CPid=$_POST["CPid"];
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$Pid=$_POST["Pid"];
$AirID=$_POST["AirID"];

$sql = "INSERT INTO copilotdetails(CPid,name,age,gender,Pid,AirID) 
VALUES('".$CPid."','".$name."','".$age."','".$gender."','".$Pid."','".$AirID."')";

if ($conn->query($sql) === TRUE) {
    echo "Copilot details inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 



