<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="registration">
        <form action="registration.php" method="post">
            <fieldset style="width: 20%">
                <legend style="text-align: center;"><b>REGISTRATION</b></legend>
                Id<br><input type="number" name="id"><br>
                Password<br><input type="password" name="password"><br>
                Confirm Password<br><input type="password" name="cpass"><br>
                Name<br><input type="name" name="name"><br>
                Email<br><input type="email" name="email"><br>
                User Type <i>[User/Admin]</i><br>
                <select name="user" id="userType">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <hr>
                <input type="submit" value="Register" name="register">
            </fieldset>
        </form>
    </div>
</body>
</html>