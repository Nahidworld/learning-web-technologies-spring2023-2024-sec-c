<?php 

    include("header.php");
/*
    include("../model/db.php");
    require_once('../model/userModel.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $con = dbConnect();

        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username = '$username' 
                        or email ='$username'";

        $result = mysqli_query($con, $sql);

    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        body{
            text-align: center;
            margin-top: 20px;
        }
        body a {
            text-decoration: none;
            padding: 5px 10px;
            color: #007bff;
        }
        a:hover{
            color: #00f;
            text-decoration: underline;
        }
        .login {
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1{
            text-align: center;
            color : #22CC94;
        }
    </style>
</head>

<body>
    
    <div class="login">
        <h1 >Log In</h1>
        <form action="../controller/logincheck.php" method="post">
        <fieldset >
        <legend><b>Log In</b></legend>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required placeholder="Nahid"><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required placeholder="****"><br><br>
        
        <input type="submit" value="Login" name="login">
        <input type="reset" value="Clear" name="reset"><br>
        <p>Already have an account?<a href="login.php"> Login now </a></p>
        <a href="forgetPassword.php"> Forgotten Password? </a>
        </fieldset>
        </form>
    </div>
</body>
</html>


<?php
    include("Footer.php");
?>