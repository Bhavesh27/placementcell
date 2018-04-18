<?php
if(isset($_POST['logout'])){
    header("Location: loginform.php");
    exit;
}
include('config.php');
session_start(); 
$query="SELECT * FROM basicdetails WHERE Id = '".$_SESSION['username']."' AND PASSWORD = '".$_SESSION['password']."'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?>
    <html>

    <head>
        <link rel="shortcut icon" href="placementcell_icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php echo $row['FirstName'].' '.$row['LastName']; ?>
        </title>
        <style>
            body {
                font: 14px Georgia, serif;
                background-image: url("admin.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            div {
                width: 100%;
                height: 30%;
                float: left;
                background: #5C5659;
            }
        </style>
    </head>

    <body>
        <div>
            <form method="POST" action="studentpanel.php">
                <button type="submit" name="logout">Logout</button>
            </form>
            <?php
    
include('config.php');
$query="SELECT * FROM basicdetails WHERE Id = '".$_SESSION['username']."' AND PASSWORD = '".$_SESSION['password']."'";
$result = mysqli_query($conn,$query);
echo "<center><h1>Personal Information</h1><br>";
echo "<table border='1' bgcolor='white' align='center' width='90%'>
<tr>
<th>Id</th>
<th>Name</th>
<th>University Rollno</th>
<th>Mobile No.</th>
<th>Email</th>
<th>DOB</th>
<th>Semester</th>
<th>Branch</th>
<th>Backlogs</th>
<th>SGPA</th>
<th>Password</th>
</tr>";
$row = mysqli_fetch_array($result);
echo "<tr>";
echo "<td>" . $row['Id'] . "</td>";
echo "<td>" . $row['FirstName'].' '.$row['LastName']  . "</td>";
echo "<td>" . $row['USN'] . "</td>";
echo "<td>" . $row['Mobile'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['DOB'] . "</td>";
echo "<td>" . $row['Sem'] . "</td>";
echo "<td>" . $row['Branch'] . "</td>";
echo "<td>" . $row['Backlogs'] . "</td>";
echo "<td>" . $row['SGPA'] . "</td>";
echo "<td>" . $row['PASSWORD'] . "</td>";
echo "</tr>";
echo "</table></center>";
echo "</div>";
echo "<hr><hr>";


$query="SELECT * FROM companydetails";
$result = mysqli_query($conn,$query);
echo "<center><h1>Personal Information</h1><br>";
echo "<table border='1' bgcolor='white' align='center' width='80%'>
<tr>
<th>Company name</th>
<th>Email</th>
<th>Website Url</th>
<th>Contact</th>
<th>Salary</th>
<th>Vacancy</th>
</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['cname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['website'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>" . $row['vacancy'] . "</td>";
echo "</tr>";
}
echo "</table></center>";
mysqli_close($conn);
?>

    </body>