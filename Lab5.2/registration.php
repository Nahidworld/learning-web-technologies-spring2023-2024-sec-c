<?php
    include("header.php");
?>
<?php
    session_start();

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];

        //session
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $email ;
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["confirm_password"] = $confirm_password;
        $_SESSION["gender"] = $gender;
        
        $_SESSION["age"] = $age;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="registration.php" method="post">
        <fieldset style="width: 500px;height:500px">
            <legend>Registration</legend>
            Name:<br>
            <input type="text" name="name" placeholder="Name"> <br>
            Email:<br>
            <input type="email" name="email" placeholder="email"> <br>
            Username:<br>
            <input type="text" name="username" placeholder="username"> <br>
            Password:<br>
            <input type="password" name="password" placeholder="password"> <br>
            Confirm Password:<br>
            <input type="password" name="confirm_password" placeholder="Confirm Password"> <br>
            Gender: <br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other<br>
            Age: <br>
            <input type="number" name="age" value="age"><br><br>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
        </fieldset>
    </form>
</body>
</html>

<?php
    include("footer.php");
?>