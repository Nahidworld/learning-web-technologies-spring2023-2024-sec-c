<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    if (!empty($name) && !empty($buying_price) && !empty($selling_price)) {
        $con = dbConnect();
        
        $name = mysqli_real_escape_string($con, $name);
        $buying_price = mysqli_real_escape_string($con, $buying_price);
        $selling_price = mysqli_real_escape_string($con, $selling_price);

        if(isset($_POST['display'])) {
            $display = 1;
        } else {
            $display = 0;
        }
        
        $sql = "INSERT INTO products (name, buying_price, selling_price, display) 
        VALUES ('$name', '$buying_price', '$selling_price', '$display')";

        if(mysqli_query($con, $sql)){
            echo "Product added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
        mysqli_close($con);
    } else {
        echo "Name, buying price, and selling price are required fields.";
    }
}
?>

<html>
<head>
    <title>Add Product</title>
</head>
<body>
<form method="post" action="addProduct.php">
    <fieldset style="width: 50%;">
        <legend>ADD PRODUCT</legend>
        Name <br><input type="text" name="name" value=""> <br>
        Buying Price <br><input type="number" name="buying_price" value=""> <br>
        Selling Price <br><input type="number" name="selling_price" value=""> <br>
        <hr>
        <input type="checkbox" name="display" value="1"> Display
        <hr>
        <input type="submit" name="save" value="Save">
    </fieldset>
</form>
</body>
</html>
