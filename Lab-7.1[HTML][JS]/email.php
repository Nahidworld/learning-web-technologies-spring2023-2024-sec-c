<html>
<head>
<title>Email Form</title>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post">
        <fieldset>
            <legend><b>EMAIL</b></legend>
            <table> 
                <tr> 
                    <td>
                    <input type="email" id="email" name="email" value="" onkeyup="emailCheck()" > 
                    </td>
                    <td>
                    <button class="email-hint" title="hint: sample@example.com">i</button>
                    </td>  
                </tr> 
                <tr> 
                    <td> 
                        <input type="button" name="submit" value="submit" onclick="emailCheck()" > 
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <h3 id="message"></h3>
                    </td>
                </tr>
        </table>
    </fieldset>
</form>

</body>
</html>