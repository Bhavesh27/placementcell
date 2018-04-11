<?php
   //printf('<paper-toast text="%s" opened></paper-toast>', htmlspecialchars("Sign Up Successful")); 
  include('config.php');
  if(isset($_POST['save']))
{
    $sql = "INSERT INTO companydetails VALUES ('".$_POST["email"]."','".$_POST["cname"]."','".$_POST["website"]."','".$_POST["number"]."','".$_POST["salary"]."','".$_POST["vacancy"]."','".$_POST["password"]."')";

    $result = mysqli_query($conn,$sql);
    echo "<script> console.log( 'here' ); </script>";
}
header("Location: loginform.html");
die();
?>
