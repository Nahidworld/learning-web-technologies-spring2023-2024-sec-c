<?php
    session_start();
    $_SESSION = array();

    if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
        $_SESSION = array();// unset session variable
        session_destroy();
        header("Location: ../view/login.html");
        exit();
    }else {
        header("Location: ../view/login.html");
        exit();
    }
?>
