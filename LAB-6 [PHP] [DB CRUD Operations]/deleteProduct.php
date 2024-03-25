<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = dbConnect();

    $sql = "DELETE FROM products WHERE id=$id";

    if(mysqli_query($con, $sql)){
        echo "Product deleted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
