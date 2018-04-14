<?php


	//Connect to server
	$conn =new mysqli("localhost", "root", "","placementcell");
	//Select the database
	

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

?>