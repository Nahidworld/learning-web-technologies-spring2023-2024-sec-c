<?php
    include("header.php");
?>
<?php

session_start();

if(!isset($_SESSION['flag'])){
    header('location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
</head>
<body>
<table width="720px" border="1">
    <tr>
        <td colspan="2">
        &emsp;<b>X Company</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
        Logged in as <a href="">
            <?php 
                echo $_SESSION['flag']; 
            ?></a> | <a href="logout.php">Logout</a>
        </td>
    </tr>
    <tr>
        <td style="width: 30%;">
            Account
            <hr>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="viewProfile.php">View Profile</a></li>
                <li><a href="editProfile.php">Edit Profile</a></li>
                <li><a href="profilePicture.php">Change Profile Picture</a></li>
                <li><a href="changePassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </td>
        <td style="width: 70%;">
            <h2>Welcome 
            <?php 
                echo $_SESSION['flag']; 
            ?></h2>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
            Copyright &copy; 2024
        </td>
    </tr>
</table>
</body>
</html>
<?php
    include("footer.php");
?>