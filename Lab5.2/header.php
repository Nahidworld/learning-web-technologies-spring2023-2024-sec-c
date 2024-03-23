<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .header {
            border: 1px solid #111;
            padding: 10px 10px;
        }
        .header .logo{
            text-align:left;
            font-size: 40px;
        }
        .header .links{
            text-align:right;
        }
        .header .links a {
            text-decoration: none;
            padding: 0 10px;
            transition: text-decoration 0.3s ease;
        }
        .header .links a:hover{
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="header">
        <table width="100%">
            <tr>
                <td class="logo">X Company</td>
                <td class="links">
                    <a href="home.php">Home</a> |
                    <a href="registration.php">Registration</a> |
                    <a href="login.php">Login</a>
                </td>
            </tr>
        </table>
    </div>
