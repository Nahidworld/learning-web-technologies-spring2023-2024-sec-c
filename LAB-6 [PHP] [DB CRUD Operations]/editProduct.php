<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = dbConnect();

    $sql = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $buying_price = $row['buying_price'];
        $selling_price = $row['selling_price'];
        $display = $row['display'];
    } else {
        echo "Product not found.";
        exit;
    }

    mysqli_close($con);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    $con = dbConnect();

    $name = mysqli_real_escape_string($con, $name);
    $buying_price = mysqli_real_escape_string($con, $buying_price);
    $selling_price = mysqli_real_escape_string($con, $selling_price);

    // Check if display checkbox is checked
    if(isset($_POST['display'])) {
        $display = 1;
    } else {
        $display = 0;
    }

    $sql = "UPDATE products SET name='$name', buying_price='$buying_price', selling_price='$selling_price', display='$display' WHERE id=$id";
    if(mysqli_query($con, $sql)){
        echo "Product updated successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>

<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<form method="post" action="editProduct.php">
    <fieldset style="width: 50%;">
        <legend>EDIT PRODUCT</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name <br><input type="text" name="name" value="<?php echo $name; ?>"> <br>
        Buying Price <br><input type="number" name="buying_price" value="<?php echo $buying_price; ?>"> <br>
        Selling Price <br><input type="number" name="selling_price" value="<?php echo $selling_price; ?>"> <br>
        <hr>
        <input type="checkbox" name="display" value="1" <?php if($display == 1) echo "checked"; ?>> Display
        <hr>
        <input type="submit" name="save" value="Save">
    </fieldset>
</form>
</body>
</html>
