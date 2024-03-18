<html>
<head>
    <title>Registration</title>
</head>

<body>
    <form action="4registration.php" method="post" enctype="" >
        <fieldset style="width: 350;">
            <legend><b>Registration</b></legend>
            <table  style="width: 100%;">
                <tr>
                    <td>Name</td>
                    <td><input type="text" value="" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" value="" name="email"> i</td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" value="" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" value="" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="text" value="" name="confirm_password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset >
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset >
                            <legend>Date of Birth </legend>
                            <input type="date" value="" name="date"> 
                            <i>(mm/dd/yyyy/)</i>
                        </fieldset>
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset" name="reset"
        </fieldset>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $dob = $_POST["date"];
    }

    //-------------Name validation--------------
    if(empty($name)){
        echo "Name is missing!";
    }
    //-------------username validation--------------
    elseif(empty($username)){
        echo "User Name is missing!";
    }elseif(empty($password)){
        echo "Password is missing!";
    }elseif(strlen($username)<2){
        echo "User Name must contain at least two (2) character!";
    }elseif(strlen($password)<8){
        echo "Password must contain at least eight (8) character!";
    }

    //-------------password validation--------------
    elseif($password != $confirm_password){
        echo "Invalid Password!Confirm Password must be same!";
    }elseif($username == $password){
        echo "Invalid Password!Password and Username are same!";
    }

    //-------------DOB validation--------------
    elseif(empty($dob)){
        echo "Date of Birth is missing!";
    }
    else{
        echo "Registration SuccessFul!";
    }
?>