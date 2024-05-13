<?php
include("../model/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $con = dbConnect();
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if (!$result || mysqli_num_rows($result) == 0) {
        exit("Email not found");
    }

    // Set new password to "password"
    $new_password = "password";
    $sql_update = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
    mysqli_query($con, $sql_update);

    exit("Password successfully reset to 'password'. Please check your email for confirmation.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="header" style="text-align:center">
        <h1>Job Finder</h1>
        <a href="../view/index.html">Home</a> 
        <a href="../view/postjob.html">Post Job</a> 
        <a href="../view/signup.html">Registration</a> 
        <a href="../view/login.html">Login</a> 
    </div>

    <div class="forgetpass">
        <h1>Forget Password</h1>
        <form action="forgetPassword.php" method="post">
            Email: <br> <input type="email" name="email" placeholder="Enter your email"><br>
            <input class="common-btn" id="btn-1" type="submit" value="Reset Password">
        </form>
    </div>
    

    <div class="footer" style="text-align:center">
        <a href="../view/index.php">Home</a>
        <a href="../view/joblist.php">Job List</a>
        <a href="../view/about.php">About Us</a> 
        <a href="../view/contact.html">Contact Us</a> 
        <a href="../view/faq.php">FAQ</a> <br><br><br>
        <a href="../view/logout.php" id="logout">Log Out</a>
        <br>
        <P >
            Copyright &copy; 2024
        </P>
    </div>
</body>
</html>
