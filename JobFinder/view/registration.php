
<?php 
include("header.php");
?>

<html>
<head>
    <title>Registration</title>
    <style>
        body{
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
        .registration{
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            
        }
        h1{
            text-align: center;
            color : #12CC94;
        }
    </style>
</head>

<body>
    <div class="registration">
    <h1>Registration</h1>
    <form action="../controller/regcheck.php" method="post" enctype="" >
        <fieldset style="width: 50%; margin-top: 20px;margin-left: 20%;" >
            <legend><b>Registration</b></legend>
            <table  style="width: 50%;">
                <tr>
                    <td>Name</td>
                    <td><input type="text" value="" name="name" required placeholder="Name.."></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" value="" name="age" required placeholder="18 - 50"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="Male" required>Male
                        <input type="radio" name="gender" value="Female" > Female
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" value="" name="email" required placeholder="abc@gmail.com"></td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" value="" name="username" required placeholder="abc"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" value="" name="password" required placeholder="********"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" value="" name="confirm_password" required placeholder="********"></td>
                </tr>
                <tr>
                    <td>
                        <br><input type="file" name="" >
                    </td>
                </tr>
                <tr>
                    <td>User Type: </td>
                    <td>
                    <select name="user_type">
                        <option value="user">user</option>
                        <option value="user">admin</option>
                    </select>
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Register" name="submit">
            <input type="reset" value="Clear" name="reset"><br>
            <p>Already have an account?<a href="login.php"> Login now </a></p>
            <a href="forgetPassword.php"> Forgotten Password? </a>
        </fieldset>
    </form>
    </div>
</body>
</html>


<?php
    include("footer.php");
?>
<?php
/* Trash
    include("../view/header.php");

    include("../model/db.php");

    if(isset($_POST["submit"])){
        $con = dbConnect();
        
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $user_type = $_POST["user_type"];

        $duplicate = mysqli_query($con, "SELECT * FROM user where username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('Username or email already registered!');</script>";
        }

        //INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')"
        $query = "INSERT INTO users (id, name, age, gender, email, username, password, user_type) 
                    VALUES ('','$name', '$age','$gender','$email','$username','$password','$user_type')";
        
        mysqli_query($con, $query);
        echo "<script>alert('Registration Successful!');</script>";
    }
    */
?>