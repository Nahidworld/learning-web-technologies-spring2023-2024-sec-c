<?php
include 'db.php';

// Check if the username is set and not empty
if(isset($_POST['username']) && !empty($_POST['username'])) {
    $username = $_POST['username'];

    // Check if the username is valid
    if(validateUsername($username)) {
        // Username is valid
        echo 'valid';
    } else {
        // Username is not valid
        echo 'invalid';
    }
} else {
    // Username is empty
    echo 'invalid';
}

// Function to validate the username
function validateUsername($username) {
    // Check if username is not empty
    if(empty($username)) {
        return false;
    }


    // Check if username contains only allowed characters (a-z, A-Z, dot, dash)
    if(!preg_match('/^[a-zA-Z.-]+$/', $username)) {
        return false;
    }

    // Check if username starts with a letter
    if(!ctype_alpha($username[0])) {
        return false;
    }

    // Username passed all validations
    return true;
}
?>
