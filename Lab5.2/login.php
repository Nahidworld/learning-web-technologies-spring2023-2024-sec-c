<?php
    include("header.php");
?>
<?php 
    session_start();

    //include("registration.php");

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(isset($_SESSION["username"]) && isset($_SESSION["password"])) {
            if($_SESSION["username"] == $username) {
                if($_SESSION["password"] == $password){
                    header("Location: dashboard.php");
                    exit;
                }else{
                    echo "wrong password.";
                }
            }else{
                echo "wrong username";
         }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    .login{
        border: 1px solid #111;
        padding: 10px 10px;
    }
    </style>
</head>
<body>
    <div class="login">
    <form action="login.php" method="post">
    <fieldset>
        <legend>Login </legend>
        Username:<br><input type="text" name="username" placeholder="username"> <br>
        Password:<br><input type="password" name="password" placeholder="password"> <br>
        <hr>
        <input type="checkbox" name="remember"> Remember Me <br>
        <input type="submit" value="Submit" name="submit">
        <a href="forgetpassword.php">Forgot Password?</a> <br>
        <a href="registration.php">Registration</a>

    </fieldset>
    </form>
    </div>
</body>
</html>
<?php
    include("footer.php");
?>