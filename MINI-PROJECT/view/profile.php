<?php
    session_start();

    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
    include_once '../model/db.php';
    $user_id = $_SESSION['user_id'];
    $query = "SELECT id, name, email, user_type FROM users WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
    } else {
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>ID: <?php echo $user_data['id']; ?></p>
    <p>Name: <?php echo $user_data['name']; ?></p>
    <p>Email: <?php echo $user_data['email']; ?></p>
    <p>User Type: <?php echo $user_data['user_type']; ?></p>
    <a href="userhome.php">Go Home</a>
</body>
</html>
