<?php 
   
    require_once('../model/userModel.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $con = dbConnect();
        
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $user_type = $_POST["user_type"];

        $duplicate = mysqli_query($con, "SELECT * FROM users where username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('Username or email already registered!');</script>";
            // exit();
            // header ('location: ../view/login.php');
        }else if (empty($username) || empty($password) || empty($email)) {
            echo "Null username, password, or email";
        }else if(!($password == $confirm_password)){
            echo "password are not same";
            exit();
        }
        else {
            $status = createUser($name, $age, $gender, $username, $password, $email, $user_type);
            if($status){
                header ('location: ../view/login.php');
                exit();
            }else {
                echo "DB error! Try again!";
            }
        }
    }
    else {
        header('Location: ../view/registration.php');
        exit();
    }

?>