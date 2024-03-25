<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // what to search goes here
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    $sql = "SELECT * FROM products WHERE 1=1";
    if (!empty($name)) {
        $sql .= " AND name LIKE '%$name%'";
    }
    if (!empty($buying_price)) {
        $sql .= " AND buying_price = $buying_price";
    }
    if (!empty($selling_price)) {
        $sql .= " AND selling_price = $selling_price";
    }

    $con = dbConnect();
    $result = mysqli_query($con, $sql);

    // Display search results
    if(mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Buying Price</th><th>Selling Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['buying_price']."</td>";
            echo "<td>".$row['selling_price']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No products found matching the search criteria.";
    }
    mysqli_close($con);
}
?>

<html>
<head>
    <title>Search Product</title>
</head>
<body>
    <h2>Search Product</h2>
    <form method="post" action="searchProduct.php">
        Product Name: <input type="text" name="name"><br>
        Buying Price: <input type="number" name="buying_price"><br>
        Selling Price: <input type="number" name="selling_price"><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>
