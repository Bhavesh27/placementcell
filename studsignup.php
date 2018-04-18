<?php if(isset($_POST["submit"])) {
    include('config.php');
    $sql="INSERT INTO basicdetails VALUES ('".$_POST["Id"]."','".$_POST["FirstName"]."','".$_POST["LastName"]."','".$_POST["USN"]."','".$_POST["Mobile"]."','".$_POST["Email"]."','".$_POST["DOB"]."','".$_POST["ADDRESS"]."','".$_POST["Sem"]."','".$_POST["Branch"]."','".$_POST["Backlogs"]."','".$_POST["SGPA"]."','".$_POST["PASSWORD"]."')";
    if ($conn->query($sql)===TRUE) {
        echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    }
    else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
    $conn->close();
    header("Location: adminpanel1.php");
}

?>
< !DOCTYPE html>
    <html>

    <head>
    <link rel="shortcut icon" href="placementcell_icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Signup</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box
            }

            /* Full-width input fields */

            input[type=text],
            input[type=password],
            input[type=email],
            input[type=number],
            input[type=url] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }

            /* Add a background color when the inputs get focus */

            input[type=text]:focus,
            input[type=password]:focus,
            input[type=email]:focus,
            input[type=number]:focus,
            input[type=url]:focus {
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
                opacity: 1;
            }

            /* Extra styles for the cancel button */

            .cancelbtn {
                padding: 14px 20px;
                background-color: #f44336;
            }

            /* Float cancel and signup buttons and add an equal width */

            .cancelbtn,
            .signupbtn {
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
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Sit on top */
                left: 0;
                top: 0;
                width: 100%;
                /* Full width */
                height: 100%;
                /* Full height */
                overflow: auto;
                /* Enable scroll if needed */
                background-color: #474e5d;
                padding-top: 50px;
            }

            /* Modal Content/Box */

            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto;
                /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%;
                /* Could be more or less, depending on screen size */
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
                .cancelbtn,
                .signupbtn {
                    width: 100%;
                }
            }
        </style>
        <script type="text/javascript">
            var check = function () {
                if (document.getElementById('PASSWORD').value == document.getElementById('confirm_password').value) {
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
            <form class="modal-content" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label>
                        <b>Student Rollno</b>
                    </label>
                    <input id="Id" type="text" placeholder="Enter student college rollno" name="Id" required>
                    <label>
                        <b>First Name</b>
                    </label>
                    <input id="FirstName" type="text" placeholder="Enter First Name" name="FirstName" required>
                    <label>
                        <b>Last Name</b>
                    </label>
                    <input id="LastName" type="text" placeholder="Enter LastName" name="LastName" required>
                    <label>
                        <b>University Number</b>
                    </label>
                    <input id="USN" type="text" placeholder="Enter University enrollment number" name="USN" required>
                    <label>
                        <b>Contact Number</b>
                    </label>
                    <input id="Mobile" type="number" placeholder="Enter Contact Number" name="Mobile" required>
                    <label>
                        <b>Email</b>
                    </label>
                    <input id="Email" type="email" placeholder="Enter Email Address " name="Email" required>
                    <label>
                        <b>Date of birth</b>
                    </label>
                    <input id="DOB" type="date" placeholder="Enter Date of birth" name="DOB" required>
                    <br>
                    <br>
                    <label>
                        <b>Address</b>
                    </label>
                    <input id="ADDRESS" type="text" placeholder="Enter Address" name="ADDRESS" required>
                    <label>
                        <b>Semester</b>
                    </label>
                    <input id="Sem" type="number" placeholder="Enter Semester" name="Sem" required>
                    <label>
                        <b>Branch</b>
                    </label>
                    <input id="Branch" type="text" placeholder="Enter Branch" name="Branch" required>
                    <label>
                        <b>Backlogs</b>
                    </label>
                    <input id="Backlogs" type="number" placeholder="No of Backlogs" name="Backlogs" required>
                    <label>
                        <b>SGPA</b>
                    </label>
                    <input id="SGPA" type="text" placeholder="Enter SGPA" name="SGPA" required>
                    <label>
                        <b>Password</b>
                    </label>
                    <input id="PASSWORD" type="password" placeholder="Enter Password" name="PASSWORD" onkeyup='check();'
                        required>
                    <label>
                        <b>Repeat Password</b>
                    </label>
                    <input id="confirm_password" type="password" placeholder="Repeat Password" name="confirm_password" onkeyup='check();'
                        required>
                    <p id="message"></p>
                    <br/>
                    <div class="clearfix">
                        <button type="button" onclick="history.back();" class="cancelbtn">Cancel</button>
                        </a>
                        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>