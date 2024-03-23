<?php
    include("header.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        Welcome <?php echo $_SESSION["username"]  ?>
    </div>
</body>
</html>
<?php
    include("footer.php");
?>