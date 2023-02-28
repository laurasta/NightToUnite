<!DOCTYPE html>
<html lang="lt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="styleRegistration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="center">
    <div class="container">
        <div class="text">
            Registration Form
        </div>
        <form action="registration.php" method="post">
            <div class="data">
                <label>Name</label>
                <input type="text" name="FirstName" required>
            </div>
            <div class="data">
                <label>Last Name</label>
                <input type="text" name="LastName" required>
            </div>
            <div class="data">
                <label>Age</label>
                <input type="number" name="Age" required>
            </div>
            <div class="data">
                <label>Education</label>
                <input type="text" name="Education" required>
            </div>
            <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="btn">
                <div class="inner"></div>
                <button type="submit">Register</button>
            </div>
            <div class="signup-link">
                Not a member? <a href="#">Signup now</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'nightuni_admin');
define('DB_PASSWORD', 'Night2unite');
define('DB_NAME', 'nightuni_2023');

/* Attempt to connect to MySQL database */
$con= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(isset($_POST['FirstName'])&&($_POST['LastName'])&& ($_POST['Age']) &&($_POST['Education']))
    {
        $FirstName = ($_POST['FirstName']);
        $LastName = ($_POST['LastName']);
        $Age = ($_POST['Age']);
        $Education = ($_POST['Education']);


                $query = "INSERT INTO Users (FirstName,LastName,Age, Education) VALUES ('$FirstName','$LastName','$Age','$Education')";
                $result = mysqli_query($con,$query);

                if($result)
                {
                    echo ' Your Record Has Been Saved in the Database ';
                }
                else
                {
                    echo ' Please Check Your Query ';
                }
        $query->close();
    }
?>
