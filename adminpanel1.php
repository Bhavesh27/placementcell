<?php 
if(isset($_POST['studupdate'])){
include('config.php');

die();
}
if(isset($_POST['studdelete'])){
    include('config.php');
    
    die();
}

if(isset($_POST['compupdate'])){
    include('config.php');
    $id = $_POST['Id'];
    $sql = "DELETE FROM companydetails WHERE cname='$id'";
    if ($conn->query($sql) === TRUE) {
        header('Location: signup.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    die();
}

if(isset($_POST['compdelete'])){
    include('config.php');
$id = $_POST['Id'];
$sql = "DELETE FROM companydetails WHERE cname='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error deleting record: " . $conn->error;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$conn->close();
die();
}
?>
<html>

<head>
    <link rel="shortcut icon" href="placementcell_icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <style>
    body { font: 14px Georgia, serif; background-image:url("admin.jpg"); background-repeat: no-repeat; background-size: cover; }
    </style>
</head>

<body>
    <a href="logoutadmin.php">Logout</a>
    <div id="container" style="height: 100%;">
        <div id="left" style="float:top; height:50%;">
            <center>
                <h1>Student Database</h1>
                <table border="2">
                    <tr>
                        <td><center>
                            <a href="studsignup.php"><button>ADD NEW RECORD</button></a></center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="studupdate.php" method="POST">
                            <input type="text" placeholder="enter the id to be updated">
                            <button type="submit">UPDATE RECORD</button>
                            </form>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <form action="studdelete.php" method="POST">
                            <input type="text" placeholder="enter the id to be deleted">
                            <button type="submit"> DELETE  RECORD</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <div id="right" style="float:top; height:50%;">
            <center>
                <h1>Company Database</h1>
                <table border="2">
                    <tr>
                        <td><center>
                            <a href="signup.html"><button>ADD NEW RECORD</button></a></center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="adminpanel1.php" method="POST">
                            <input type="text" name="Id" placeholder="enter the company name to be updated">
                            <button type="submit" name="compupdate">UPDATE  RECORD</button>
                            </form>            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="adminpanel1.php" method="POST">
                            <input type="text" name="Id" placeholder="enter the company name to be deleted">
                            <button type="submit" name="compdelete">DELETE RECORD</button>
                            </form>
                        </td>
                    </tr>
                </table>
                <center>

        </div>
    </div>
</body>

</html>