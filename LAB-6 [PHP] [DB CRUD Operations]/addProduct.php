<?php
    require_once('db.php');

    function addProduct($name, $buying_price, $selling_price, $display){
        $con = dbConnect();

        //$sql = "insert into users values('', '{$user['username']}','{$user['email']}', '{$user['password']}')";
    }
?>
<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <form method="post" action="addProduct.php" enctype="">
            <fieldset style="width: 50%;">
                <legend>ADD PRODUCT</legend>
                Name <br><input type="text" name="name" value=""> <br> 
                Buying Price <br><input type="number" name="buying_price" value=""> <br>
                Selling Price <br><input type="number" name="selling_price" value=""> <br>
                <hr>
                <input type="checkbox" name="display" value=""> Display 
                <hr>
                <input type="submit" name="save" value="Save">
            </fieldset>
        </form>
    </body>
</html>