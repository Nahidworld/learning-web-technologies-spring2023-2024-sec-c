<?php
    // session_start();
    // if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    //     header("Location: login.php");
    //     exit();
    // }
    include("header.php");
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
</head>
<body>
    <div class="job">
        <h2>Post Job</h2>
        <form action="postjob.php" method="get">
            Job Title: <br>     <input type="text" name="job_title" placeholder="Job Title"><br>
            Company Name: <br>  <input type="text" name="company_name" placeholder="Company Name"><br>
            Description: <br>   <input type="text" name="description" placeholder="Details"><br>
            Location: <br>      <input type="text" name="location" placeholder="Location"><br>
            Job Type: <br>      <input type="text" name="job_type" placeholder="Job Type"><br>
            Salary: <br>        <input type="text" name="salary" placeholder="20000"><br><br>

                                <input type="submit" value="Post Job" name="post_job">
                                <input type="reset" value="Clear">
        </form>
    </div>
</body>
</html>
<?php
    include("footer.php");
?>