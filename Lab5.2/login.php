<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <style>
        
        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
        }
        hr {
            margin: 10px 0;
        }

        fieldset {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="login">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>LOGIN</legend>
                        User Name:<input type="text" id="username" name="username"> <br>
                        Password :<input type="password" id="password" name="password">
                        <hr>
                        <input type="checkbox" id="remember_me" name="remember_me">Remember me
                        <br> <br>
                        <button type="submit">Submit</button> <a href="forgot_password.html">Forgot Password?</a><br>   
                    </fieldset>
                </td>
            </tr>
        </table>
    </div>
<?php
    include("footer.php");
?>
</body>
</html>

