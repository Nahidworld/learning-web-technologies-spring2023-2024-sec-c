<?php
    require_once('db.php');

    function addProduct($name, $buying_price, $selling_price, $display){
        $con = dbConnect();
       
    }
?>
<html>
    <head>
        <title>Display</title>
    </head>
    <body>
        <form method="post" action="addProduct.php" enctype="">
            <fieldset style="width: 50%;">
                <legend>DISPLAY</legend>
                <table border="">
                    <tr>
                        <th>NAME</th>
                        <th>PROFIT</th>
                        <th colspan="2"></th>
                    </tr>
                    <tr>
                        <td>Samsung</td>
                        <td>5000</td>
                        <td><a href="editProduct.php">Edit</a></td>
                        <td><a href="deleteProduct.php">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Nokia</td>
                        <td>1500</td>
                        <td><a href="editProduct.php">Edit</a></td>
                        <td><a href="deleteProduct.php">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Samsung</td>
                        <td>3300</td>
                        <td><a href="editProduct.php">Edit</a></td>
                        <td><a href="deleteProduct.php">Delete</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>