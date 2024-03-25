<?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null usernamepassword";
    }else if($username == $password){
        $_SESSION['flag'] = $username;
        header('location: dashboard.php');
    }else{
        echo "invalid User!";
    }
?>