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
$sql = "CREATE TABLE pilotdetails (
name VARCHAR(20),
PID INT(20),
age INT(10),
gender2 VARCHAR(30) NOT NULL,
airlines VARCHAR(30) NOT NULL,
AirID VARCHAR(30) REFERENCES aeroplanedetails(AirID),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mydetail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
