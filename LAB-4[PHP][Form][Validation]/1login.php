<html>
<head>
    <title>Login</title>
</head>

<body>
    <form  action="1login.php" method="post">
        <fieldset style="width: 30%;">
            <legend><b>LOGIN</b></legend>

            <table border="0">
                <tr>
                    <td>UserName</td>
                    <td>: <input type="text" value="" name="username" title=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>: <input type="password" value="" name="password" title=""></td>
                </tr>
            </table>

            <hr>
            <input type="checkbox" value="" name="">
            <label for="remember">Remember Me</label>
            <br><br>
            <input type="submit" value="Submit" name="submit">
            <a href="2changepassword.php">
                <label for="forgot_password">Forgot Password?</label>
            </a>
        </fieldset>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        //-------------username validation--------------
        if(empty($username)){
            echo "User Name is missing!";
        }elseif(empty($password)){
            echo "Password is missing!";
        }elseif(strlen($username)<2){
            echo "User Name must contain at least two (2) character!";
        }elseif(strlen($password)<8){
            echo "Password must contain at least eight (8) character!";
        }else{
            echo "Login Successful!";
        }
    }
?>

