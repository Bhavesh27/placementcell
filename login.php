<?php

session_start();
require_once('includes.php');


	//Connect to server
	$link = mysql_connect($host, $user, $password) or die(mysql_error());
	//Select the database
	mysql_select_db ($database);

	// Get the login credentials from user
	$username = $_POST['username'];
	$userpassword = $_POST['password'];	
	
	// Secure the credentials
	$email = mysql_real_escape_string($_POST['username']);
	$userpassword = mysql_real_escape_string($_POST['password']);

	// Check the users input against the DB.
	$query = "SELECT * FROM placementcell.companydetails WHERE email = '$username' AND password = '$userpassword'";
	$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
	
	$count = mysql_num_rows($result);
	
	if ($count == 1)
	{
		$_SESSION['loggedIn'] = "true";
		header("Location: loggedin.html");
		die();
// I also tried the whole URL here, but same result.

	}
	else
	{
		$_SESSION['loggedIn'] = "false";
		echo "<p>Login failed, username or password incorrect.</p>";
	}



?>
