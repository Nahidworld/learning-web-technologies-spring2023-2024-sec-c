<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login">
        <form action="login.php" method="post">
            <fieldset style="width: 20%">
                <legend style="text-align: center;"><b>LOGIN</b></legend>
                User Id<br><input type="number" name="id"><br>
                Password<br><input type="password" name="password"><br><br>
                <input type="checkbox" name="rmeember">Remember Me <br>
                <hr>
                <input type="submit" value="Login" name="login">
                <a href="registration.php">Register</a>
            </fieldset>
        </form>
    </div>
</body>
</html>