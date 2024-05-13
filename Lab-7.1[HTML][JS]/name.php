<html>
<head>
<title>Name Form</title>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">

        <fieldset>
            <legend><b>NAME</b></legend>
            <table> 
                <tr> 
                    <td>
                        <input type="text" id="name" name="name" value="" onkeyup="nameCheck()" /> 
                    </td>
                </tr> 
                <tr>
                    <td>
                        <hr>
                        <input type="button" name="submit" value="submit" onclick="nameCheck()" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1 id="message"></h1>
                    </td>
                </tr>
        </table>
    </fieldset>
</form>

</body>
</html>