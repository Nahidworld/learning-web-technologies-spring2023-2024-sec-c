<?php 
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/reg.css">
    <script src="../assets/reg.js"></script>
</head>
<body>
    <div class="registration">
        <h1>Registration</h1>
        <div class="registration">
            <form name="reg" onsubmit="return formValidation()" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Name">
                <input type="number" name="age" placeholder="18 - 50">
                Gender:
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="email" name="email" placeholder="abc@gmail.com">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <input type="file" class="pp" name="profile_picture">
                User Id:
                <input type="number" name="user_id">
                <br>
                <input class="common-btn" id="sub" type="submit" value="Register" name="submit"> <br>
                <input class="common-btn" id="reset" type="reset" value="Clear" name="reset"><br>
                <p>Already have an account? <a href="../view/login.php">Login now</a></p>
                <p><a href="../view/forgetPassword.php">Forgotten Password?</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php
include("footer.php");
?>
