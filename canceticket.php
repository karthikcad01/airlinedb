<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aero";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Cid=$_POST["Cid"];
// sql to delete a record
$sql = "DELETE FROM airlinedetails WHERE Cid='".$Cid."'";

if (mysqli_query($conn, $sql)) {
    echo "Ticket Cancelled successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>