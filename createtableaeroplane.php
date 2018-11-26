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
$sql = "CREATE TABLE aeroplanedetails (
AirID VARCHAR(20) PRIMARY KEY,
city VARCHAR(20) NOT NULL,
city1 VARCHAR(10) NOT NULL,
airlines VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Mydetail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
