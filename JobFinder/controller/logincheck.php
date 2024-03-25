
<?php
    session_start();

    include("../view/header.php");
    include("../model/db.php");
    require_once('../model/userModel.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $con = dbConnect();

        //$email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = getUserByUsername($username);

        if($user){
            if($password == $user["password"]){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $user["id"];

                header("Location: ../view/joblist.php");
                exit();
            }else {
                echo "
                <script>alert('Wrong Password!!');window.location.href = '../view/login.php';
                </script>";
            }
        }else {
            echo "
            <script>
            alert('User not registered!');window.location.href = '../view/login.php';
            </script>";
        }

    }else {
        header("Location: ../view/login.php");
        exit();
    }
?>
