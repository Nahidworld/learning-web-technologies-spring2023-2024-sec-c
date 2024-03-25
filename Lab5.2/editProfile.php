<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
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
                <fieldset>
                    <legend><b>EDIT PROFILE</b></legend>
                        <form action="edit_profile_process.php" method="POST">
                            Name: <input type="text" name="name" value="Bob"><br>
                            Email:<input type="email" name="email" value="bob@aiub.edu"><br>
                            Gender:<input type="text" name="gender" value="Male"><br>
                            Date of Birth:<input type="text" name="dob" value="23/12/1999"><br>

                            <hr>
                            <input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
    include("footer.php");
?>