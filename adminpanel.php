<?php
session_start();
$username = $_POST['username'];
$userpassword = $_POST['password'];	
if ($username == "admin" && $userpassword == "admin")
{
	$_SESSION['loggedIn'] = "true";
	header("Location: adminpanel.html");
	die();
}
else
{
	$_SESSION['loggedIn'] = "false";
	echo "<p>Login failed, username or password incorrect.</p>";
}
?>
