<?php
include("../model/db.php");

if (!isset($_GET['updateid'])) {
    header("Location: ../view/joblist.php");
    exit();
}

$con = dbConnect();

$id = $_GET['updateid'];
$sql = "SELECT * FROM jobs WHERE id = $id";
$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    header("Location: ../view/joblist.php");
    exit();
}

$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $job_type = $_POST['job_type'];
    $salary = $_POST['salary'];
    $app_time = $_POST['app_time'];

    $sql = "UPDATE jobs SET job_title = '$job_title', company_name = '$company_name', description = '$description', location = '$location', job_type = '$job_type', salary = '$salary', application_time = '$app_time' WHERE id = $id";
    mysqli_query($con, $sql);

    header("Location: ../view/joblist.php");
    exit();
}

include("../view/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Job</title>
</head>
<body>
    <h2>Update Job</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?updateid=' . $id; ?>" method="post">
            Job Title: <br>     <input type="text" name="job_title" placeholder="Job Title"><br>
            Company Name: <br>  <input type="text" name="company_name" placeholder="Company Name"><br>
            Description: <br>   <input type="text" name="description" placeholder="Details"><br>
            Location: <br>      <input type="text" name="location" placeholder="Location"><br>
            Job Type: <br>      <input type="text" name="job_type" placeholder="Job Type"><br>
            Salary: <br>        <input type="text" name="salary" placeholder="20000"><br><br>
    </form>
</body>
</html>
<?php
include("../view/footer.php");
?>








<?php
    include("../model/db.php");
    $con = dbConnect();

    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
        
        // Fetch the existing job details
        $sql = "SELECT * FROM jobs WHERE id = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $job_title = $row['job_title'];
            $company_name = $row['company_name'];
            $description = $row['description'];
            $location = $row['location'];
            $job_type = $row['job_type'];
            $salary = $row['salary'];
            $app_time = $row['application_time'];
        } else {
            echo "<script>alert('Job not found!'); window.location.href = '../view/joblist.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('No job ID provided for update.'); window.location.href = '../view/joblist.php';</script>";
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Retrieve updated job details from the form
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $job_type = $_POST['job_type'];
        $salary = $_POST['salary'];
        $app_time = $_POST['app_time'];

        // Update the job details in the database
        $sql = "UPDATE jobs SET job_title = ?, company_name = ?, description = ?, location = ?, job_type = ?, salary = ?, application_time = ? WHERE id = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "sssssssi", $job_title, $company_name, $description, $location, $job_type, $salary, $app_time, $id);
        $result = mysqli_stmt_execute($stmt);

        if($result){
            echo "<script>alert('Job details updated successfully!'); window.location.href = '../view/joblist.php';</script>";
            exit();
        } else {
            echo "<script>alert('Failed to update job details.'); window.location.href = '../view/joblist.php';</script>";
            exit();
        }
}

include("../view/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Job</title>
</head>
<body>
    <h2>Update Job</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?updateid=' . $id; ?>" method="post">
        Job Title: <br>     <input type="text" name="job_title" placeholder="Job Title"><br>
        Company Name: <br>  <input type="text" name="company_name" placeholder="Company Name"><br>
        Description: <br>   <input type="text" name="description" placeholder="Details"><br>
        Location: <br>      <input type="text" name="location" placeholder="Location"><br>
        Job Type: <br>      <input type="text" name="job_type" placeholder="Job Type"><br>
        Salary: <br>        <input type="text" name="salary" placeholder="20000"><br><br>
        <input type="submit" value="Update Job">
    </form>
</body>
</html>
<?php
include("../view/footer.php");
?>
