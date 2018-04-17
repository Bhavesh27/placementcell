<?php 
if(isset($_POST['submit'])){
include('config.php');
$sql="INSERT INTO companydetails VALUES ('".$_POST["email"]."','".$_POST["cname"]."','".$_POST["website"]."','".$_POST["number"]."','".$_POST["salary"]."','".$_POST["vacancy"]."','".$_POST["password"]."')";
$result=mysqli_query($conn, $sql);
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();
}
?>
<!DOCTYPE html>
<html>
    <head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=number], input[type=url] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=number]:focus, input[type=url]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
     /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<script type="text/javascript">
var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }
</script>
</head>
<body>
<div id="id01" class="modal">
  
  <form class="modal-content" action="signup.php" method="post" >
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label><b>Email</b></label>
      <input id="email" type="email" placeholder="Enter Email" name="email" required>
      
      <label><b>Company Name</b></label>
      <input id="cname" type="text" placeholder="Enter company name" name="cname" required>
      
      <label><b>Website Name</b></label>
      <input id="website" type="url" placeholder="Enter website link" name="website" >

      <label ><b>Contact Number</b></label>
      <input id="number" type="number" placeholder="Enter Contact Number" name="number" required>

      <label><b>Minimum Salary</b></label>
      <input id="salary" type="number" placeholder="Enter Minimum Salary" name="salary" required>

      <label ><b>Minimum Vacancies </b></label>
      <input id="vacancy" type="number" placeholder="Enter Minimum Vacancies" name="vacancy" required>

      <label ><b>Password</b></label>
      <input id="password" type="password" placeholder="Enter Password" name="password" onkeyup='check();' required>

      <label><b>Repeat Password</b></label>
      <input id="confirm_password" type="password" placeholder="Repeat Password" name="confirm_password" onkeyup='check();' required>
      <p id="message"></p><br/>

      <div class="clearfix">
        <button type="button" onclick="history.back();" class="cancelbtn">Cancel</button></a>
        <button type="submit" class="signupbtn" name="submit">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>

