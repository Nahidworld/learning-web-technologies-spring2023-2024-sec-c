<?php
    session_start();
    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
    

    include_once '../model/db.php';
    $user_id = $_SESSION['user_id'];
    $query = "SELECT name FROM users WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['name'];
    } else {
        $user_name = "User"; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users' home page</title>
</head>
<body>
    <h1>Welcome <?php echo $user_name; ?></h1>
    <a href="profile.php">Profile</a>
    <a href="changePassword.php">Change Password</a>
    <a href="../controller/logout.php">Logout</a>
</body>
</html>
