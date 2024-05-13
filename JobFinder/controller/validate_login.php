<?php
include ('../model/db.php'); // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set in the POST request
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Attempt to authenticate user
        $con = dbConnect(); // Connect to the database
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // User authenticated successfully
            echo "success";
        } else {
            // Authentication failed
            echo "error";
        }

        // Close database connection
        mysqli_close($con);
    } else {
        // Invalid request
        echo "error";
    }
} else {
    // Invalid request method
    echo "error";
}
?>
