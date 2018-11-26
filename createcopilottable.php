 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Aero";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE copilotdetails (
CPid VARCHAR(20) NOT NULL,
name VARCHAR(20) NOT NULL,
age VARCHAR(10) NOT NULL,
gender VARCHAR(10) NOT NULL,
Pid VARCHAR(20) NOT NULL,
AirID VARCHAR(30) REFERNCES aeroplanedetails(AirID),
reg_date TIMESTAMP,PRIMARYKEY(CPid)
)";

if ($conn->query($sql) === TRUE) {
    echo "Copilot details inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
