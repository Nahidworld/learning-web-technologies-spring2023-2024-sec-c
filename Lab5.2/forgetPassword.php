<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <style>
        fieldset {
            width: 400px; 
            margin: 0 auto; 
            text-align: left; 
        }
        hr {
            width: 100%; 
            margin: 10px 0; 
        }
    </style>
</head>
<body>
    <table style="width: 720px;" border="1">
        <tr>
            <td>
                &emsp;<b> X Company &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   
                <a href="home.php">Home</a> |
                <a href="registration.php">Registration</a> |
                <a href="login.php">Login</a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <fieldset>
                    <legend>Forgot Password</legend>
                    Email:<input type="email" id="email" name="email"><br>
                    <hr>
                    <button type="submit">Submit</button>
                </fieldset>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
    include("footer.php");
?>