<?php
    session_start();
    include("../model/db.php");
    
    $con = dbConnect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="header" style="text-align:center">
        <div class="logo">
            <img src="../assets/logo1.png" alt="">
        </div>
        <a href="../view/index.html">Home</a> 
        <a href="../view/postjob.html">Post Job</a> 
        <a href="../view/signup.html">Registration</a> 
        <a href="../view/login.html">Login</a> 
    </div>

    <div class="job">
    <h1>Job List</h1>
    <table border="1">
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
    </div>

    <script>
        // Add JavaScript functionality here
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('deleteBtn')) {
                var jobId = event.target.dataset.id;
                var confirmation = confirm('Are you sure you want to delete this job?');
                if (confirmation) {
                    // Redirect to delete job script passing the jobId
                    window.location.href = 'deletejob.php?deleteid=' + jobId;
                }
            } else if (event.target.classList.contains('updateBtn')) {
                var jobId = event.target.dataset.id;
                // Redirect to update job script passing the jobId
                window.location.href = 'updatejob.php?updateid=' + jobId;
            }
        });
    </script>
</body>
</html>
<?php
    include("footer.php");
?>