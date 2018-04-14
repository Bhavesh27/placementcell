<?php 
  include('config.php');
    $sql = "INSERT INTO companydetails VALUES ('".$_POST["email"]."','".$_POST["cname"]."','".$_POST["website"]."','".$_POST["number"]."','".$_POST["salary"]."','".$_POST["vacancy"]."','".$_POST["password"]."')";

    $result = mysqli_query($conn,$sql);

header("Location:javascript://history.back()");
die();
?>
