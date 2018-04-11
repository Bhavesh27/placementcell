<?php


	//Connect to server
	$conn = mysqli_connect("localhost", "root", "","placementcell");
	//Select the database
	

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

?>