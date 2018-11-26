
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

$Hid = $_POST["Hid"];
$name = $_POST["name"];
$age = $_POST["age"];
$Pid = $_POST["Pid"];
$AirID = $_POST["AirID"];


$sql = "INSERT INTO hostessdetails (Hid,name,age,Pid,AirID) VALUES ('".$Hid."', '".$name."','".$age."','".$Pid."','".$AirID."')";

if ($conn->query($sql) === TRUE) {
    echo "Air hostess data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
