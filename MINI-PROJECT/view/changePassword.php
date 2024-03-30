<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include_once '../model/db.php';

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $query = "SELECT password FROM users WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        if ($old_password === $stored_password) {
            if ($new_password === $confirm_password) {
                $update_query = "UPDATE users SET password = '$new_password' WHERE id = '$user_id'";
                $update_result = mysqli_query($con, $update_query);
                if ($update_result) {
                    $success = "Password changed successfully!";
                } else {
                    $error = "Failed to update password. Please try again.";
                }
            } else {
                $error = "New password and confirm password do not match.";
            }
        } else {
            $error = "Incorrect old password.";
        }
    } else {
        $error = "Failed to retrieve user data. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <?php if ($error): ?>
        <p style='color: red;'>Error: <?php echo $error; ?></p>
    <?php elseif ($success): ?>
        <p style='color: green;'><?php echo $success; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="old_password">Old Password:</label><br>
        <input type="password" id="old_password" name="old_password" required><br>
        <label for="new_password">New Password:</label><br>
        <input type="password" id="new_password" name="new_password" required><br>
        <label for="confirm_password">Confirm New Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Change">
    </form>
    <a href="userhome.php">Home</a>
</body>
</html>
