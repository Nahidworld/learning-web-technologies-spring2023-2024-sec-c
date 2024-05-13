<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        fieldset{
            width: 350px;
        }
    </style>
    <script>

    </script>
</head>
<body>

<form action="" method="post">
<fieldset>
    <legend><b>GENDER</b></legend>
    <table>
        <tr>
            <td>
                <input type="radio" id="male" name="gender" value="Male" />Male
                <input type="radio" id="female" name="gender" value="Female" />Female
                <input type="radio" id="other" name="gender" value="Other" />Other
                
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" name="submit" value="submit" onclick="genderCheck()"/> 
            </td>
            </tr>
            <tr>
            <td>
                <h4 id="message"></h4>
            </td>
            </tr>
    </table>
    </fieldset>
</form>

</body>
</html>
