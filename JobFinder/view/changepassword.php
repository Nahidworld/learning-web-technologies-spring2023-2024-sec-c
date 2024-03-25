<?php 
    include("header.php");
    include("../model/db.php");
?>
<html>
<head>
    <title>Change Password</title>
    <style>
        body{
            text-align: center;
            margin-top: 20px;
        }
        body a {
            text-decoration: none;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <form action="changepassword.php" method="post" enctype="">
        <fieldset >
            <legend><b>Change Password</b></legend>
            <table border="0">
                <tr>
                    <td>Current Password</td>
                    <td>: <input type="password" value="" name="current_password"></td>
                </tr>
                <tr>
                    <td><p style="color: #1b881b;">New Password</p></td>
                    <td>: <input type="password" value="" name="new_password"></td>
                </tr>
                <tr>
                    <td><p style="color: #9e0606;">Retype New Password</p></td>
                    <td>: <input type="password" value="" name="retype_new_password"></td>
                </tr> 
            </table>
            <hr>
            <input type="submit" value="Submit" name="submit">
            <button > <a href="login.php"> Login </a></button><br><br>
            <button > <a href="registration.php"> Create New Account? </a></button>
        </fieldset>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $current_pass = $_POST["current_password"];
        $new_pass = $_POST["new_password"];
        $retype_new_pass = $_POST["retype_new_password"];
        
        if($current_pass == $new_pass){
            echo "Invalid Password! New Password should not be same as the Current Password";
        }elseif($new_pass != $retype_new_pass){
            echo "Invalid Password! New Password must match with the Retyped Password";
        }else{
            echo "Password Changed Successfully!";
        }
    }
?>
<?php
    include("Footer.php");
?>