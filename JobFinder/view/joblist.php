<?php

    session_start();
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header("Location: login.php");
        exit();
    }

    include("header.php");
    include("../model/db.php");
    
    $con = dbConnect();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
</head>
<body>
    <a href="postjob.php"><button>Post Job</button></a>
    <h2>Job List</h2>
    <table >
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Company Name:</th>
            <th>Description</th>
            <th>Location</th>
            <th>Type</th>
            <th>Salary</th>
            <th>Application Time</th>
            <th>Operation</th>
            
        </tr>
        <?php
        $sql = "Select * from jobs";
    $result = mysqli_query($con, $sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id             = $row['id'];
            $job_title      = $row['job_title'];
            $company_name   = $row['company_name'];
            $description    = $row['description'];
            $location       = $row['location'];
            $job_type       = $row['job_type'];
            $salary         = $row['salary'];
            $app_time       = $row['application_time'];

            echo '
            <tr>
                <th>'.$id.'</th>
                <td>'.$job_title.'</td>
                <td>'.$company_name.'</td>
                <td>'.$description.'</td>
                <td>'.$location.'</td>
                <td>'.$job_type.'</td>
                <td>$'.$salary.'</td>
                <td>'.$app_time.'</td>
                
                <td>
                    <button><a href="updatejob.php?updateid='.$id.'">Update</a></button>
                    <button><a href="deletejob.php?deleteid='.$id.'">Delete</a></button>
                </td>
            </tr>
            ';
        }
    }
    ?>

    </table>
</body>
</html>
<?php
    include("footer.php");
?>