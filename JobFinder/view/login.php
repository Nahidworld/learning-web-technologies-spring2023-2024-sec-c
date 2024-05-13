<?php 
    // include("header.php");
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
    <!----------------
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
    !---------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/script.js"></script>
    <style>
        .login-btn{
            color: #fff;
            background-color: #00ff00;
        }
    </style>
    
</head>

<body>
    <div class="header" style="text-align:center">
    
        <div class="logo">
            <img src="../assets/logo1.png" alt="">
        </div>
        <a href="../view/index.html">Home</a> 
        <a href="../view/postjob.html">Post Job</a> 
        <a href="../view/signup.html">Registration</a> 
        <a href="../view/login.php">Login</a> 
    </div>

    <div class="container">
        <div class="login">
            <h1 >Log In</h1>
            <form  method="post" onsubmit="return loginValidation()">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Nahid"><br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="****"><br><br>
            <p id="forget"><a href="../view/forgetPassword.php"> Forgotten Password? </a></p>
            <input class="login-btn common-btn " id="btn-1" type="submit" value="Login" name="login">
            <input class="common-btn login-clear" id="btn-2" type="reset" value="Clear" name="reset"><br>
            <p>Create an account?<a href="../view/signup.html"> Signup now </a></p>
            
            </form>
        </div>
    </div>

    <!-- <div class="footer" style="text-align:center">
        <a href="../view/index.php">Home</a>
        <a href="../view/joblist.php">Job List</a>
        <a href="../view/about.php">About Us</a> 
        <a href="../view/contact.html">Contact Us</a> 
        <a href="../view/faq.php">FAQ</a> <br><br><br>
        <a href="../view/logout.php" id="logout">Log Out</a>
        <br>
        <p >
            Copyright &copy; 2024
        </p>
    </div> -->
    
</body>
</html>
</body>
</html>


<?php
    include("Footer.php");
?>