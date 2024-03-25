<?php
    require_once('db.php');

function login($username, $password){
    $con = dbConnect();
    $sql = "SELECT * FROM users WHERE username = '$username' 
                        or email ='$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: ../view/dashboard.php");
            exit();
        }
        else{
            echo "<script>alert('Wrong Password!!');</script>";
        }
    }else if (empty($username) || empty($password) || empty($email)) {
        echo "Null username, password, or email";
    }else{
        echo "<script>alert('User not registered!');</script>";
    }
}

    function getUserByUsername($username) {
        $con = dbConnect();
        $username = mysqli_real_escape_string($con, $username);
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        
        if ($result && mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            return false; // User not found
        }
    }
    


function createUser($name, $age, $gender, $username, $password, $email, $user_type) {
    $con = dbConnect();
    $sql = "INSERT INTO users (id, name, age, gender, email, username, password, user_type) 
    VALUES ('','$name', '$age','$gender','$email','$username','$password','$user_type')";
    return mysqli_query($con, $sql);
}



function getUsers() {
    $con = dbConnect();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    return $users;
}

function updateUser($id, $username, $password, $email) {
    $con = dbConnect();
    $sql = "UPDATE users SET username='$username', password='$password', email='$email' WHERE id=$id";
    return mysqli_query($con, $sql);
}

function deleteUser($id) {
    $con = dbConnect();
    $sql = "DELETE FROM users WHERE id=$id";
    return mysqli_query($con, $sql);
}
?>