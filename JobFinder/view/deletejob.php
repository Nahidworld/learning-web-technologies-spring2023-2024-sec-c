<?php
    include("../model/db.php");
    $con = dbConnect();

    if(isset($_GET['deleteid'])){
        $id =$_GET['deleteid'];

        $sql = "delete from jobs where id = $id";

        $result = mysqli_query($con, $sql);

        if($result){
            echo "<script>alert('Job Deleted!');</script>";
            header('Location: ../view/joblist.php');
            exit();
        }else{
            echo "Not deleted";
        }
    }
?>