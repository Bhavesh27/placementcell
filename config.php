<?php //Connect to server
$conn=new mysqli("localhost", "id4931781_root", "password", "id4931781_placementcell"); //Select the database
if( !$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>