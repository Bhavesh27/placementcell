<?php
$conn = new mysqli("localhost", "root", "","placementcell");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_POST['Id'];
$sql = "DELETE FROM companydetails WHERE cname='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
