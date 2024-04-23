<?php
sleep(5); //  time in second (5 second here)

// getting data 
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

print(' "Form data received:\n" .
        "Name: $name\n" .
        "Age: $age\n" .
        "Gender: $gender\n" .
        "Email: $email\n" .
        "Username: $username\n" .
        "Password: $password\n" .
        "Confirm Password: $confirm_password"; ')
?>
