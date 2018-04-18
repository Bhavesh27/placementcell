<?php
if(isset($_POST['admin'])){
$username = $_POST['username'];
$userpassword = $_POST['password'];	
if ($username == "admin" && $userpassword == "admin")
{
	header("Location: adminpanel1.php");
}
else
{
	echo "<p>Login failed, username or password incorrect.</p>";
}
}

if(isset($_POST['student'])){
    session_start();
    include('config.php');
    $username=$_POST['username'];
    $userpassword=$_POST['password'];
    $query="SELECT * FROM basicdetails WHERE Id = '$username' AND PASSWORD = '$userpassword'";
    $result=mysqli_query($conn,$query);
    $res=mysqli_fetch_row($result) or die ("Unable to verify user because " . mysql_error());
    if ($res) 
    {   $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: studentpanel.php");
    }
    else 
    {
        echo "<p>Login failed, username or password incorrect.</p>";
    }
    
}

if(isset($_POST['company'])){
    session_start();
    include('config.php');
    $username=$_POST['username'];
    $userpassword=$_POST['password'];
    $query="SELECT * FROM companydetails WHERE email = '$username' AND password = '$userpassword'";
    $result=mysqli_query($conn,$query);
    $res=mysqli_fetch_row($result) or die ("Unable to verify user because " . mysql_error());
    if ($res) 
    {   $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: companypanel.php");
    }
    else 
    {
        echo "<p>Login failed, username or password incorrect.</p>";
    }
    
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="placementcell_icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PAGE</title>
    <script type="text/javascript">
      $(function() {
      var $forms = $("form");
      $forms.focusin(function() {
      $forms.removeClass("active-form");
      $(this).addClass("active-form");
      });
      });
    </script>
  <style>
  body { font: 14px Georgia, serif; background-image:url("back.jpg"); background-repeat: no-repeat; background-size: cover; }
  #page-wrap { width: 960px; margin: 0 auto; }

  h3 { margin: 20px 0 10px 0; }


  .login-block {
      text-align: center;
      float:left;
      margin:0 49px 25px 0;
      text-align:center;
      width:260px;
  }

  .login-block form {
      border-radius:15px;
      box-shadow:0 0 10px #333;
      border-radius: 15px;
      box-shadow: 0 0 10px #333;
      border:3px solid white;
      padding:20px;
  }

  .login-block .active-form {
      border-color:#122BCE;
  }

  .login-block form p {
      margin:0;
      text-align:left;
  }

  .login-block label {
      color:#7C6767;
      font-size:14px;
  }

  .login-block input[type="text"], .login-block input[type="password"] {
      vertical-align:middle;
      border-color:#EEEEEE #CCCCCC #CCCCCC #EEEEEE;
      border-right:1px solid #CCCCCC;
      border-style:solid;
      border-width:1px;
      font-size:15px;
      margin:0 0 15px;
      padding:5px;
      width:200px;
  }

  .login-block a.button {
      text-decoration:none;
  }

  .login-block input[type="text"]:focus, .login-block input[type="password"]:focus {
      border-color:#555555;
  }
  </style>
  </head>

  <body>
  	<div id="page-wrap" style="margin:150px 200px 200px 200px;">
          <h2><center>LOGIN PAGE</center></h2><br>
          <div class="login-block">
              <h3>Company Login</h3>
              <form  method="post" action="loginform.php">
                  <p><label>Email</label><input id="username" type="text" name="username" required/></p>
                  <p><label>Password</label><input id="password" type="password" name="password" required/></p>
                  <p class="submit-wrap">
                    <input type="submit"  class="button" name="company" >
                    <a href="signup.php">sign up</a>
                  </p>
              </form>
          </div>

          <div class="login-block">
              <h3>Student Login</h3>
              <form action="loginform.php" method="post">
                  <p><label>Student Id</label><input type="text" name="username" required/></p>
                  <p><label>Password</label><input type="password" name="password" required/></p>
                  <p class="submit-wrap"><input type="submit" class="button" name="student" /></p>
              </form>
          </div>

          <div class="login-block last">
              <h3>Administration Login</h3>
              <form action="loginform.php" method="post" >
                  <p><label>User Name</label><input type="text" name="username" required/></p>
                  <p><label>Password</label><input type="password" name="password" required/></p>
                  <p class="submit-wrap"><input type="submit"  class="button" name="admin" /></p>
              </form>
          </div>
  	</div>
  </body>
</html>
