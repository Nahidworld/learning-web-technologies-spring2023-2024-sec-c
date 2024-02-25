<html>
<head>
    <title>
        Registration
    </title>
</head>

<body>
    <form action="4registration.php" method="post" enctype="">
        <fieldset style="width: 350;">
            <legend><b>Registration</b></legend>


            <table  style="width: 100%;">
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        <input type="text" value="" name="name">
                    </td>
                </tr>

                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="email" value="" name="email"> i
                    </td>
                    
                </tr>

                <tr>
                    <td>
                        UserName
                    </td>
                    <td>
                        <input type="text" value="" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="text" value="" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password 
                    </td>
                    <td>
                        <input type="text" value="" name="cpassword">
                    </td>
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
                            <i>(dd/mm/yyyy/)</i>
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