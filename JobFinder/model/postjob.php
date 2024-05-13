<?php
    session_start();
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header("Location: ../view/login.html");
        exit();
    }
    include("../view/header.php");
    include("../model/db.php");
    require_once('../model/userModel.php');

    if(isset($_GET["post_job"])){
        $con = dbConnect();
        $job_title      = $_GET["job_title"];
        $company_name   = $_GET["company_name"];
        $description    = $_GET["description"];
        $location       = $_GET["location"];
        $job_type       = $_GET["job_type"];
        $salary         = $_GET["salary"];

        $sql = "INSERT INTO jobs (job_title, company_name, description,
                    location, job_type, salary) 
                    VALUES ('$job_title', '$company_name', '$description', 
                    '$location', '$job_type','$salary')";

        $result = mysqli_query($con, $sql);
        if($result){
            echo "Job Posted!";
        }else{
            die(mysqli_error($con));
        }
    }

?>